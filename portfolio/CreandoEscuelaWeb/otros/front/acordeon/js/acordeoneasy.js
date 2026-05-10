var titulo = document.querySelector('.titulo'),
    contenido = document.querySelector('.texto_articulo');



titulo.addEventListener('click', function(){
    console.log('Mostrar articulos por favor');
    contenido.classList.toggle('desplegar'); //se añade la clase desplegar a la variable contenido que tiene la clase titulo
    this.classList.toggle('desplegado'); //this se refiere a la variable
        
  
});

