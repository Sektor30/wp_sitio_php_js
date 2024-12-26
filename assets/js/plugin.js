
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
