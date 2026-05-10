
//usar variables para acceder a distintos elementos
var btnMenu = document.getElementById('btnMenu'), 
    elMenu = document.querySelector('.main_menu'), //esperamos encontrar 1, si hay mas de uno tomaría el primero (con querySelectorAll se podría aplicar)
    elementosMenu = document.querySelectorAll('.main_menu-link'); 

btnMenu.addEventListener('click', function(){
    console.log('Has pulsado el botónnnnnn');
    
    elMenu.classList.toggle('verMenu');  //con toggle hace que cambie
    this.classList.toggle('btnX'); // se le añade una clase btnX 
    
});

elementosMenu.forEach((elementoMenu)=>{
    elementoMenu.addEventListener('click', () =>{ 
        elMenu.classList.remove('verMenu'); //Se elimina el menu visible
        btnMenu.classList.remove('btnX'); //se quita el boton de X de menu
    });
});



//CONTADOR CON CUENTA REGRESIVA

const   second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;

let countDown = new Date('Dec 15, 2020 00:00:00').getTime(),
x = setInterval(function() {

    let now = new Date().getTime(),
    distance = countDown - now;

    document.getElementById('days').innerText = Math.floor(distance / (day)),
    document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
    document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
    document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);

    //do something later when date is reached
    //if (distance < 0) {
    //  clearInterval(x);
    //  'IT'S MY BIRTHDAY!;
    //}

}, second)


//MODAALPARA cargar iframe de inscripcion a en ventana emergente con link a la pag de maraton de tenerife
$('.inscripcion_link').modaal({
	type: 'iframe',
	width: 1000,
	height: 800,
    custom_class:"modaal_pers"
});

//Para mostrar la politica de privacidad en nueva ventana
$('.modal_ajaxpino').modaal({
    type: 'ajax'
});

//FLICKITY

var elem = document.querySelector('.recorrido_maps');
            var flkty = new Flickity( elem, {
                // options
                cellAlign: 'left',
                contain: true,
                wrapAround: true, //esto se ha añadido de otra 
                pagedots: false,
//              prevNextButtons: false,
                arrowShape: 'M 0,50 L 60,00 L 50,30 L 80,30 L 80,70 L 50,70 L 60,100 Z',
                //watchCSS: true, para activar o desactivar el carousel en función del tamaño de pantalla por ejemplo
                //fullscreen: true, (necesita otro archivo)
                autoPlay: false
                
            });

            // element argument can be a selector string
            //   for an individual element
            var flkty = new Flickity( '.recorrido_maps', {
              // options
        });



//CHART

var ctx = document.getElementById('myChart').getContext('2d');
			var myChart = new Chart(ctx, {
				type: 'line', //line, bar
				data: {
					labels: ['1km', '2km', '3km', '4km', '5km', '6km', '7km', '8km', '9km', '10km', '11km', '12km'], //Nombre etiquetas
					datasets: [{
						label: 'Cota altitud', //Chart name
						data: [5, 3, 6, 2, 1, 3, 8, 1, -4, 7, 15,0],
						backgroundColor: [
							'rgba(22, 160, 86, 0.2)',
						],
						borderColor: [
							'rgb(16, 16, 16)',

						],
						borderWidth: 1
					}]
				},
				options: {
                    responsive: 'true',
					scales: {
						yAxes: [{
							ticks: {
								beginAtZero: true
							}
						}]
					}
				}
			});



