import { CountUp } from 'countup.js';
import AOS from 'aos';

const header = document.getElementsByTagName('header')[0]
const nav = document.getElementsByTagName('nav')[0]
const toggle = document.getElementById('btn_menu')
const btn_arg = document.getElementById('argentina')
const btn_esp = document.getElementById('espana')
const content_esp = document.getElementById('content_esp')
const content_arg = document.getElementById('content_arg')
const paises = document.getElementsByClassName('pais')

AOS.init()

btn_arg.addEventListener('click', function(){
	showHideProjects(content_arg, content_esp)
});

btn_esp.addEventListener('click', function(){
	showHideProjects(content_esp, content_arg)
});

function showHideProjects(currentCountry, otherCountry) {
	if (currentCountry.classList.contains('open')) {
		currentCountry.classList.remove('open')
	} else {
		currentCountry.classList.add('open')
		otherCountry.classList.remove('open')
	}
}

toggle.addEventListener('click', function(){
	menuToggle()
});

function closeAllProjects() {
	for (var i = 0; i < paises.length; i++) {
		paises[i].classList.remove('open')
	}
}

function menuToggle() {
	nav.classList.toggle('active')
	toggle.classList.toggle('active')
	
	if (toggle.classList.contains("fa-bars")) {
		toggle.classList.remove('fa-bars')
		toggle.classList.add('fa-times')
	} else {
		toggle.classList.add('fa-bars')
		toggle.classList.remove('fa-times')
	}
}

/*HABILITAR ESTA FUNCION PARA QUE EL HEADER APAREZCA Y DESAPAREZCA EN FUNCION
DEL SCROLL HACIA ARRIBA O ABAJO
*/
var scrollVar = -400;
window.addEventListener('scroll', function() {


	if ( document.body.getBoundingClientRect().top >= scrollVar )
		showlHeader()
	else
		hidelHeader()
});

function showlHeader() {
	header.classList.remove('background')
}

function hidelHeader() {
	header.classList.add('background')
}

function validateForm() {
	// Validacion del Formulario
  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.getElementsByClassName('needs-validation');
  // Loop over them and prevent submission
  var validation = Array.prototype.filter.call(forms, function(form) {
    if (form.checkValidity() === false) {
      event.preventDefault();
      event.stopPropagation();
      return true
    }
    form.classList.add('was-validated');
      return false
  });
}

var url = window.location.pathname;
var filename = url.substring(url.lastIndexOf('/')+1);

var options = { // opciones para objetos CountUp
  useEasing: true, 
  useGrouping: true, 
  separator: '.', 
  decimal: '.', 
  enableScrollSpy: true, 
}

if ( filename === 'empresa.php') { // Seccion de empresa

	var years = new CountUp('years', 35, options);
	var constructions = new CountUp('constructions', 40, options);

}

if ( typeof(section_detalle) !== 'undefined' ) { // Seccion de obra individual

	// Conexion con API de Youtube (evita videos relacionados al termino del video)
	document.addEventListener("DOMContentLoaded", function () {
    if (window.hideYTActivated) return;
    let onYouTubeIframeAPIReadyCallbacks = [];
    for (let playerWrap of document.querySelectorAll(".hytPlayerWrap")) {
      let playerFrame = playerWrap.querySelector("iframe");
      let tag = document.createElement("script");
      tag.src = "https://www.youtube.com/iframe_api";
      let firstScriptTag = document.getElementsByTagName("script")[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
      let onPlayerStateChange = function (event) {
        if (event.data == YT.PlayerState.ENDED) {
          playerWrap.classList.add("ended");
        } else if (event.data == YT.PlayerState.PAUSED) {
          playerWrap.classList.add("paused");
        } else if (event.data == YT.PlayerState.PLAYING) {
          playerWrap.classList.remove("ended");
          playerWrap.classList.remove("paused");
        }
      };
      let player;
      onYouTubeIframeAPIReadyCallbacks.push(function () {
        player = new YT.Player(playerFrame, { events: { onStateChange: onPlayerStateChange } });
      });
      playerWrap.addEventListener("click", function () {
        let playerState = player.getPlayerState();
        if (playerState == YT.PlayerState.ENDED) {
          player.seekTo(0);
        } else if (playerState == YT.PlayerState.PAUSED) {
          player.playVideo();
        }
      });
    }
    window.onYouTubeIframeAPIReady = function () {
      for (let callback of onYouTubeIframeAPIReadyCallbacks) {
        callback();
      }
    };
    window.hideYTActivated = true;	
	});

	// Planos y Renders
	const maps = document.getElementsByClassName('map')
	const renders = document.getElementsByClassName('render')
	var title = document.getElementById('title_ambiente')
	var titleFloor = document.getElementById('title_floor')

	for (var i = 0; i < maps.length; i++) {
		maps[i].addEventListener('click', function(){
			
			// Remover la clase .active de todos los mapas y todos los renders
			removeActiveClassOnAllMapsAndAllRenders(this)

			// Obtener el numero de 'data-mapa' seleccionado
			let numberDataMap = this.getAttribute('data-plano')

			// Obtener el titulo de 'data-plano-title' seleccionado
			let titleDataMap = this.getAttribute('data-plano-title') 

			// Obtener el titulo de 'data-plano-floor' seleccionado
			let floor = this.getAttribute('data-plano-floor') 

			// Capturar el 'data-render' de igual valor al 'data-mapa'
			for (let item of renders) {

				if ( item.dataset.render == numberDataMap ) {
					
					// Agregar clase .active al mapa.
					this.classList.add('active')

					// Agregar clase .active al render.
					item.classList.add('active')
					
					// Cambiar el titulo al departamento:
					title.innerHTML = titleDataMap

					// Cambiar el titulo al piso:
					titleFloor.innerText = floor

				}

			}

		});
	}

	function removeActiveClassOnAllMapsAndAllRenders(currentMap) {

		for (var i = 0; i < maps.length; i++) {
			maps[i].classList.remove('active')
			renders[i].classList.remove('active')
		}

	}
	// Planos y Renders end
	
	// Avances de Obra
	const valueDemolicion = document.getElementById('demolicion').getAttribute('data-value')
	const valueExcavacion = document.getElementById('excavacion').getAttribute('data-value')
	const valueExtructuras = document.getElementById('extructuras').getAttribute('data-value')
	const valueMamposteria = document.getElementById('mamposteria').getAttribute('data-value')
	const valueInstalaciones = document.getElementById('instalaciones').getAttribute('data-value')
	const valueTerminaciones = document.getElementById('terminaciones').getAttribute('data-value')

	var demolicion = new CountUp('demolicion', valueDemolicion, options);
	var excavacion = new CountUp('excavacion', valueExcavacion, options);
	var extructuras = new CountUp('extructuras', valueExtructuras, options);
	var mamposteria = new CountUp('mamposteria', valueMamposteria, options);
	var instalaciones = new CountUp('instalaciones', valueInstalaciones, options);
	var terminaciones = new CountUp('terminaciones', valueTerminaciones, options);
	// Avances de Obra end
	
}



