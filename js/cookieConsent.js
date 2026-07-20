// Gestion de consentimiento de cookies (GDPR). Detalle de categorias e
// implementacion en README.md.
import * as CookieConsent from 'vanilla-cookieconsent'

// gtag/loadGtmIfConsented estan definidos en includes/tag_manager_head.php.
function syncAnalyticsConsentMode() {
  const analyticsAccepted = CookieConsent.acceptedCategory('analytics')

  if (typeof window.gtag === 'function') {
    window.gtag('consent', 'update', {
      analytics_storage: analyticsAccepted ? 'granted' : 'denied'
    })
  }

  if (analyticsAccepted && typeof window.loadGtmIfConsented === 'function') {
    window.loadGtmIfConsented()
  }
}

// Notifica cambios de consentimiento al resto de la app (ver README.md).
function notifyConsentChange() {
  window.dispatchEvent(new CustomEvent('cc:consent'))
}

CookieConsent.run({
  mode: 'opt-in',
  revision: 0,

  guiOptions: {
    consentModal: {
      layout: 'box inline',
      position: 'bottom left',
      equalWeightButtons: true,
      flipButtons: false
    },
    preferencesModal: {
      layout: 'box',
      equalWeightButtons: true,
      flipButtons: false
    }
  },

  categories: {
    necessary: {
      readOnly: true,
      enabled: true
    },
    analytics: {
      autoClear: {
        cookies: [
          { name: /^_ga/ },
          { name: '_gid' },
          { name: '_gat' }
        ]
      }
    },
    embeds: {
      // Sin autoClear propio todavia: la etapa B define los placeholders
      // de YouTube/Maps y puede sumar aca las cookies a limpiar si aplica.
    }
  },

  language: {
    default: 'es',
    translations: {
      es: {
        consentModal: {
          title: 'Utilizamos cookies',
          description:
            'Usamos cookies propias y de terceros para el funcionamiento del sitio, para analizar la navegación con fines estadísticos y, en algunas páginas, para mostrar contenido embebido de terceros (videos, mapas). Podés aceptar todas las cookies, rechazar las que no son necesarias, o personalizar tu elección. Para más información visitá nuestra <a href="politica-cookies.php" class="cc-link">Política de Cookies</a>.',
          acceptAllBtn: 'Aceptar',
          acceptNecessaryBtn: 'Rechazar',
          showPreferencesBtn: 'Personalizar',
          footer:
            '<a href="politica-cookies.php">Política de Cookies</a>\n<a href="politica-privacidad.php">Política de Privacidad</a>'
        },
        preferencesModal: {
          title: 'Preferencias de privacidad',
          acceptAllBtn: 'Aceptar todas',
          acceptNecessaryBtn: 'Rechazar todas',
          savePreferencesBtn: 'Guardar preferencias',
          closeIconLabel: 'Cerrar',
          serviceCounterLabel: 'servicio(s)',
          sections: [
            {
              title: 'Uso de cookies',
              description:
                'Podés gestionar tus preferencias de cookies por categoría. Las cookies necesarias no se pueden desactivar porque son indispensables para el funcionamiento del sitio. Para más detalle sobre cada cookie, consultá nuestra <a href="politica-cookies.php" class="cc-link">Política de Cookies</a>.'
            },
            {
              title: 'Cookies necesarias',
              description:
                'Son imprescindibles para que el sitio funcione correctamente (navegación, seguridad, recordar tu elección de cookies). No requieren consentimiento.',
              linkedCategory: 'necessary'
            },
            {
              title: 'Cookies de análisis',
              description:
                'Nos permiten entender cómo se usa el sitio (páginas visitadas, tiempo de navegación) para mejorarlo. Utilizamos Google Analytics a través de Google Tag Manager.',
              linkedCategory: 'analytics'
            },
            {
              title: 'Contenido embebido de terceros',
              description:
                'Permiten mostrar contenido alojado en sitios externos, como videos de YouTube o mapas de Google Maps. Si están desactivadas, en su lugar vas a ver un aviso para habilitarlas puntualmente.',
              linkedCategory: 'embeds'
            },
            {
              title: 'Más información',
              description:
                'Podés cambiar esta elección en cualquier momento desde el enlace "Cambiar preferencias de cookies" en el pie de página.'
            }
          ]
        }
      }
    }
  },

  onConsent: () => {
    syncAnalyticsConsentMode()
    notifyConsentChange()
  },

  onChange: () => {
    syncAnalyticsConsentMode()
    notifyConsentChange()
  }
})

// Enlaces "Cambiar preferencias de cookies" (footer +, opcionalmente,
// dentro del texto de politica-cookies.php). Se usa una clase en vez de un
// id porque puede haber mas de uno en la misma pagina.
document.querySelectorAll('.js-cookie-preferences').forEach(function (link) {
  link.addEventListener('click', function (event) {
    event.preventDefault()
    CookieConsent.showPreferences()
  })
})
