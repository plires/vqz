// Gestion de embeds de terceros (YouTube, Google Maps) segun la categoria
// de consentimiento "embeds". Detalle en README.md.
import * as CookieConsent from 'vanilla-cookieconsent'

const PLACEHOLDER_SELECTOR = '.consent-embed-placeholder'

function buildIframe(placeholder) {
  const type = placeholder.dataset.embedType
  const src = placeholder.dataset.embedSrc
  const title = placeholder.dataset.embedTitle

  const iframe = document.createElement('iframe')
  iframe.setAttribute('loading', 'lazy')
  if (title) iframe.setAttribute('title', title)

  if (type === 'youtube') {
    // Sin `origin`, el player de YouTube no puede confirmar a que ventana
    // padre postear sus mensajes (mas todavia insertando el iframe despues
    // de la carga inicial, no en el HTML de entrada) y reintenta el
    // handshake en loop -- de ahi los errores crecientes de postMessage.
    const originParam = 'origin=' + encodeURIComponent(window.location.origin)
    iframe.src = src + (src.includes('?') ? '&' : '?') + originParam
    iframe.className = 'embed-responsive-item'
    iframe.setAttribute('frameborder', '0')
    iframe.setAttribute('allowfullscreen', '')
  } else if (type === 'maps') {
    iframe.src = src
    iframe.setAttribute('width', '100%')
    iframe.setAttribute('height', '600')
    iframe.style.border = '0'
    iframe.setAttribute('allowfullscreen', '')
    iframe.setAttribute('referrerpolicy', 'no-referrer-when-downgrade')
  }

  return iframe
}

// Re-dispara window.initHytPlayerWrap (js/app.js) porque ese wrap no tenia
// iframe cuando corrio el DOMContentLoaded original.
function revealEmbed(placeholder) {
  const type = placeholder.dataset.embedType
  const wrap = placeholder.closest('.hytPlayerWrap')
  const iframe = buildIframe(placeholder)

  placeholder.replaceWith(iframe)

  if (type === 'youtube' && wrap && typeof window.initHytPlayerWrap === 'function') {
    window.initHytPlayerWrap(wrap)
  }
}

function getPlaceholders() {
  return document.querySelectorAll(PLACEHOLDER_SELECTOR)
}

function revealAllIfAccepted() {
  if (!CookieConsent.acceptedCategory('embeds')) return
  getPlaceholders().forEach(revealEmbed)
}

function wireUpPlaceholder(placeholder) {
  if (CookieConsent.acceptedCategory('embeds')) {
    revealEmbed(placeholder)
    return
  }

  const acceptBtn = placeholder.querySelector('.consent-embed-accept')
  if (!acceptBtn) return

  acceptBtn.addEventListener('click', function () {
    CookieConsent.acceptCategory('embeds')
    revealEmbed(placeholder)
  })
}

document.addEventListener('DOMContentLoaded', function () {
  getPlaceholders().forEach(wireUpPlaceholder)
})

window.addEventListener('cc:consent', revealAllIfAccepted)
