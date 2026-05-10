var myNav = document.getElementById('mynav');
window.onscroll = function () { 
    "use strict";
    if (document.body.scrollTop >= 200 ) {
        myNav.classList.add("nav-colored");
        myNav.classList.remove("nav-transparent");
    } 
    else {
        myNav.classList.add("nav-transparent");
        myNav.classList.remove("nav-colored");
    }
};

//MENU HAMBURGUESA
//usar variables para acceder a distintos elementos
var btnMenu = document.getElementById('btnMenu'), 
    elMenu = document.querySelector('.nav-list'), //esperamos encontrar 1, si hay mas de uno tomaría el primero (con querySelectorAll se podría aplicar)
    elementosMenu = document.querySelectorAll('.main_menu-link'); 

btnMenu.addEventListener('click', function(){
    console.log('Has pulsado el botónnnnnn');
    this.classList.toggle('btnX'); // se le añade una clase btnX
    elMenu.classList.toggle('verMenu');  //con toggle hace que cambie
     
    
});

elementosMenu.forEach((elementoMenu)=>{
    elementoMenu.addEventListener('click', () =>{ 
        elMenu.classList.remove('verMenu'); //Se elimina el menu visible
        btnMenu.classList.remove('btnX'); //se quita el boton de X de menu
    });
});

function validation() {
    var userName = document.getElementById('name');
    var userSurname = document.getElementById('surname');
    var userEmail = document.getElementById('email');
    var userPhone = document.getElementById('phone');
    var userMessage = document.getElementById('message');

 
    if ((userName.value == null || userName.value === '') || (userSurname.value == null || userSurname.value === '') && (userEmail.value == null || userEmail.value === '') || (userPhone.value == null || userPhone.value === '') || (userMessage.value == null || userMessage.value === '')){
        swal ( "Oops" ,  "Some fields missing" ,  "error" );
    }  
    else{
        swal("Thank you!", "Your message was sent!", "success");
    }


   
}

