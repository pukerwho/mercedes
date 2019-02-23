//АНИМАЦИЯ
$(document).ready(function() {    
  $("body").css("opacity", "1");
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