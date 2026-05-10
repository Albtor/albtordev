//ACORDEON2

if(window.innerWidth < 992){
    console.log("Pantalla grande " + window.innerWidth + "Se debería mostrar el desplegable");
    
/*Para comentarios ver acordeon1 */
//en titulos se almacena un array
var titulos = document.querySelectorAll('.titulo');


titulos.forEach((titulo)=>{
    let contenido = titulo.nextElementSibling;
    //creamos esta variable y le asignamos la altura de contenido
    let altoContenido = contenido.offsetHeight;
    //ponemos la altura a 0
    //console.log(altoContenido);
    contenido.style.height = 0;
   
    
    titulo.addEventListener('click', ()=>{ 
        contenido.classList.toggle('desplegar'); 
            
        if(contenido.classList.contains('desplegar')){
           contenido.style.height = altoContenido + 'px';
 
        }else{
           contenido.style.height = 0;
        }   
        
        titulo.classList.toggle('desplegar');
    });      
});

    
}else {
    var titulos = document.querySelectorAll('.titulo');
    
    titulos.forEach((titulo)=>{
        
        let articulo = titulo.getElementById;
        console.log("1");
        
        titulo.addEventListener('click', ()=>{ });
        
        console.log("2");
        
    });
}



if(window.innerWidth > 992){
    console.log("Pantalla grande " + window.innerWidth);
    
}else if(window.innerWidth > 576 & window.innerWidth < 992){
    console.log("Pantalla mediana " + window.innerWidth);
}else{
    console.log("Pantalla pequeña " + window.innerWidth);
}


