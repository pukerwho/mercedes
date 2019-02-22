$('.toogle-menu').on('click', function(e) {
  e.preventDefault;
  $(this).toggleClass('toogle-menu_active');
  $('.slide-menu').toggleClass('slide-menu_active');
  $('.menu li').toggleClass('animate-left');
});

//АНИМАЦИЯ
AOS.init({});

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