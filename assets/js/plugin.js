
$('.owl-carousel').owlCarousel({
  items:4,
  loop:true,
  margin:60,
    autoplay:true,
    autoplayTimeout:500,
    autoplayHoverPause:true,
    


  
  responsiveClass:true,
  responsive:{
      0:{
          items:1,
          nav:true
      },
      600:{
          items:3,
          nav:false
      },
      1000:{
          items:5,
          nav:true
          
      }
  }
})


$('.play').on('click',function(){
  owl.trigger('play.owl.autoplay',[500])
})
$('.stop').on('click',function(){
  owl.trigger('stop.owl.autoplay')
})


/* 
 // JavaScript para funcionalidad del menú hamburguesa
 const menuToggle = document.getElementById('menu-toggle');
 const menu = document.getElementById('menu');

 menuToggle.addEventListener('click', () => {
     menu.classList.toggle('active');
 }); */

 
 window.addEventListener("DOMContentLoaded",()=>{
  let $btnHamb = document.querySelector(".encabezado__hamburguesa a");
  let $Menu = document.querySelector(".encabezado__menu-responsive");

  $Menu.hidden = true;
  $btnHamb.addEventListener("click", (e)=>{
      e.preventDefault();

      $Menu.hidden = !$Menu.hidden
      $Menu.classList.toggle("menu_active");
  })
})