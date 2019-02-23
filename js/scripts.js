//АНИМАЦИЯ
$(document).ready(function() {
  var change_page_animate = function(){
   $('.change-page').addClass('change-page-animate');  
  }
  var wrapper_opacity = function(){
    $(".wrapper").css("opacity", "1");
  }
  change_page_animate();
  setTimeout(wrapper_opacity, 1000);
});

var mySwiper = new Swiper ('.swiper-main', {
  slidesPerView: 'auto',
  spaceBetween: 30,
  loop: true,
  autoplay: {
      delay: 6000,
  },
  navigation: {
    nextEl: '.swiper-slide-button-next',
    prevEl: '.swiper-slide-button-prev',
  },
});