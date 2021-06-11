/*
adcionar uma function de click  

*/

var fecharMenu = document.querySelector('header .fa-bars');
fecharMenu.addEventListener('click',function(){
    var header = document.querySelector('header');
    var content = document.querySelector('.content');
    var menu = document.querySelector('.menu');
    if(header.classList.contains('header-normal')){
        header.classList.remove('header-normal');
        content.style.width="calc(100% - 230px)";
        content.style.left="230px";
        menu.style.width="230px";
    }else{
        header.classList.add('header-normal'); 
        menu.style.width="0";
        content.style.width="100%";
        content.style.left="0";
    }
})



