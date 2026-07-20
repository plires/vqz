# vqz / sitio

Sitio institucional de VAZQUEZ Obras & Servicios. PHP plano (sin framework ni
router: cada página de nivel raíz, ej. `contacto.php` o `aranguren-1061.php`,
se sirve directamente) + un bundle único de JS/CSS armado con Webpack.

## Estructura del repo

```
sitio/                  <- este repo (raíz servida como /sitio/*)
  clases/                DB (PDO), mail (PHPMailer), antispam
  includes/               partials compartidos (header, footer, GTM, config)
  includes/parts/          partials más chicos (ej. formulario de contacto)
  js/, css/, src/           frontend (entry point: src/index.js -> dist/bundle.js)
  php/                     validate-form.php (validación backend del form)
  docker/                  Dockerfile de PHP, config de nginx
  backup-bdd/              dump de MySQL para sembrar la DB local (gitignored)
../                    <- carpeta padre (NO es un repo git)
  .env                     variables de entorno reales (gitignored, fuera del repo)
  production.env           config de referencia de producción (fuera del repo)
```

**Por qué `.env` vive un nivel arriba de `sitio/`**: `includes/config.inc.php`
carga dotenv con `Dotenv::createImmutable(__DIR__ . '/../../')`, que resuelve
al padre de `sitio/`. Esto reproduce cómo se sirve en producción (el vhost
apunta a la carpeta padre, y la app se accede en `/sitio/*`), así que el
entorno local lo mantiene igual en vez de reescribir esa ruta.

## Levantar el entorno local (Docker)

Requisito: Docker Desktop corriendo.

```bash
cd sitio
docker compose up -d --build   # primera vez (o tras cambiar el Dockerfile)
docker compose up -d           # las siguientes
```

Servicios:

| Servicio  | Qué es                          | Acceso                          |
|-----------|----------------------------------|----------------------------------|
| `nginx`   | web server                       | http://localhost:8080/sitio/     |
| `php`     | PHP 8.1-FPM (igual que prod)     | (no expuesto directamente)       |
| `db`      | MySQL 8.0                        | `localhost:3307` (host) / `db:3306` (entre contenedores) |
| `mailpit` | atrapa el correo saliente local  | UI: http://localhost:8025 · SMTP: `localhost:1025` |

### `.env`

No se versiona ni se puede escribir automáticamente (está protegido). Copiar
la plantilla y ajustar a mano:

```bash
cp sitio/docker/env.docker.example ../.env
```

Valores clave para que la app hable con los contenedores:

```
DSN="mysql:host=db;dbname=vqz_2022;charset=utf8;port=3306"
DB_USER="vqz"
DB_PASS="vqz_local"
ENVIRONMENT="local"
```

### Base de datos

El dump `backup-bdd/vqz.sql` se importa **automáticamente** la primera vez
que se crea el volumen de `db` (vía `docker-entrypoint-initdb.d`). Si ya
existía el volumen y hace falta reimportar:

```bash
docker compose down -v db   # borra el volumen de datos de MySQL
docker compose up -d db     # vuelve a importar el dump
```

Consultas manuales:

```bash
docker compose exec -T db mysql -uvqz -pvqz_local vqz_2022 -e "SHOW TABLES;"
```

### Dependencias de la app (composer / npm)

```bash
docker compose exec php composer install
npm install && npm run build   # build de assets, corre en el host (no en Docker)
```

`webpack.config.js` **no procesa CSS** (la regla de `css-loader` está
comentada) — todo el CSS del sitio se linkea con `<link>` directo en cada
página, no se importa desde JS.

### Correo saliente (Mailpit)

`ENVIRONMENT=local` hace que `PHPMailer` use `isSendmail()` en vez de SMTP
(ver `clases/app.php`). El contenedor `php` tiene `msmtp` instalado y
`sendmail_path` apuntando a él (`docker/php/Dockerfile`, `docker/php/msmtprc`),
así que ese `sendmail` local en realidad reenvía todo a Mailpit. Cualquier
mail que mande la app en local aparece en http://localhost:8025 — no sale a
internet.

### Antispam / reCAPTCHA

El form de contacto tiene reCAPTCHA v3 real (claves de prod) y un rate
limit propio (`clases/AntiSpam.php`, tabla `spam_attempts`, 5 intentos/hora
por IP por default). Testing automatizado (curl, headless) puede chocar con
ambos controles — para probar el flujo de consentimiento del form sin
pelear con reCAPTCHA, es más simple invocar
`RepoContactsSQL::saveContactFormContactInBDD()` directo con un script PHP
dentro del contenedor.

## Cumplimiento GDPR / cookies

Implementado: banner de cookies, páginas legales (con contenido de
**ejemplo**, pendiente el contenido real del cliente), checkbox de
consentimiento en el form de contacto + registro en DB, y bloqueo de
GTM/Analytics y de embeds de terceros hasta que el usuario da consentimiento.

### Categorías de consentimiento

Definidas en `js/cookieConsent.js` (librería
[`vanilla-cookieconsent`](https://github.com/orestbida/cookieconsent) v3,
modo `opt-in`). No cambiar estos tres nombres sin actualizar todos los
archivos que los usan:

- **`necessary`** — siempre activa, no se puede desactivar.
- **`analytics`** — Google Tag Manager / GA4.
- **`embeds`** — iframes de YouTube y Google Maps.

API que usa el resto del código:

```js
import * as CookieConsent from 'vanilla-cookieconsent'

CookieConsent.acceptedCategory('analytics')  // boolean
CookieConsent.acceptCategory('embeds')       // acepta esa categoría puntual
CookieConsent.showPreferences()              // reabre el panel

window.addEventListener('cc:consent', () => { /* reaccionar a un cambio */ })
```

El evento `cc:consent` lo dispara `js/cookieConsent.js` (no la librería) en
`onConsent`/`onChange`, para desacoplar los módulos que reaccionan a
cambios de consentimiento (`js/consentEmbeds.js`) de la configuración misma
del banner.

### GTM / Google Analytics (Consent Mode v2)

GTM **no se carga** (no hay request a `googletagmanager.com`) hasta que la
categoría `analytics` está aceptada. Mecanismo (`includes/tag_manager_head.php`):

1. Antes que nada se define `window.gtag` y se encola
   `gtag('consent','default',{...todo denied...})` — esto no hace red ni
   setea cookies, solo dejaba el estado por si GTM llegara a cargar.
2. El snippet de GTM queda envuelto en `window.loadGtmIfConsented()`, sin
   ejecutarse solo.
3. `js/cookieConsent.js` (`syncAnalyticsConsentMode`) llama a
   `loadGtmIfConsented()` cuando `analytics` está aceptada (al aceptar, o al
   cargar una página si ya estaba aceptada de antes), y a
   `gtag('consent','update',...)` para mantener sincronizado el estado.

El `<noscript>` fallback de GTM (`includes/tag_manager_body.php`) se
**eliminó a propósito**: no hay forma de condicionarlo al consentimiento
(si el visitante tiene JS deshabilitado, tampoco puede correr el banner
para dar o negar consentimiento), así que la única opción compatible con
"no cargar sin consentimiento" es no cargarlo para esos visitantes.

**Estado del contenedor GTM-KHNBVLP** (revisado 2026-07-20): una sola
etiqueta, GA4, nativa de Google — respeta Consent Mode v2 automáticamente,
sin necesidad de configurar activadores de consentimiento a mano. No hay
pendientes de este lado.

### YouTube / Google Maps

13 iframes (2 YouTube, 11 Maps) reemplazados por placeholders
(`.consent-embed-placeholder`, ver `js/consentEmbeds.js`) que muestran un
botón "Aceptar y ver contenido" y solo insertan el iframe real cuando la
categoría `embeds` está aceptada. YouTube usa `youtube-nocookie.com`.

### Formulario de contacto

Checkbox obligatorio (sin premarcar) + validación frontend (Bootstrap
`needs-validation`) y backend (`php/validate-form.php`). Al guardar el
contacto se registran `consent_accepted_at` (timestamp) y `consent_ip`
(prioriza `X-Forwarded-For`, cae a `REMOTE_ADDR`) en la tabla `contacts`
(`clases/repoContactsSQL.php`).

### Pendiente

- Contenido real de Aviso Legal / Política de Privacidad / Política de
  Cookies (hoy son placeholders con estructura pero texto de ejemplo).
