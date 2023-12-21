// header script starts

let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}


// header script ends


// banner script starts

var counter = 1;
setInterval(function(){
    document.getElementById('radio' + counter).checked = true;
    counter++;
    if(counter >5){
        counter=1;
    }
},2000);


// banner script endss




//service script starts

window.onscroll = () =>{
    menubar.classList.remove('fa-times');
    navbar.classList.remove('active');
}

//service script ends
