//ACORDEON2


/*Para comentarios ver acordeon1 */
var titulos = document.querySelectorAll('.titulo');


titulos.forEach((elemento)=>{
    let contenido = elemento.nextElementSibling;
    //creamos esta variable y le asignamos la altura de contenido
    let altoContenido = contenido.offsetHeight;
    //ponemos la altura a 0
    console.log(altoContenido);
    contenido.style.height = 0;
   
    
    elemento.addEventListener('click', ()=>{ 
        contenido.classList.toggle('desplegar'); 
            
        if(contenido.classList.contains('desplegar')){
           contenido.style.height = altoContenido + 'px';
 
        }else{
           contenido.style.height = 0;
        }   
        
        elemento.classList.toggle('desplegar');
    });      
});




var reglamento = document.querySelector('.reglamento');
var anchoBorde = reglamento.offsetHeight / 2.7;
reglamento.style.border = 'solid ' + anchoBorde + 'px #000';
