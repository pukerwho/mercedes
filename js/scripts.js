//АНИМАЦИЯ
$(document).ready(function() {
  var change_page_animate = function(){
   $('.change-page').addClass('change-page-animate');  
  }
  var wrapper_opacity = function(){
    $(".wrapper").css("opacity", "1");
  }
  wrapper_opacity();
});

// $('.parallax-background').parallaxBackground();
$(function(){
  if (navigator.userAgent.match(/(iPod|iPhone|iPad|Android)/)) {
    $('#ios-notice').removeClass('hidden');
    $('.parallax-container').height( $(window).height() * 0.5 | 0 );
  } else {
    $(window).resize(function(){
      var parallaxHeight = Math.max($(window).height() * 0.7, 200) | 0;
      $('.parallax-container').height(parallaxHeight);
    }).trigger('resize');
  }
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

//Подпись
if($('.p_about__sign'). length){
  $(window).scroll(function(event){
    scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    signTop = $('.p_about__sign').offset().top - $(window).height() + 5;
    console.log(scrollTop);
    console.log(signTop);
    if (scrollTop > signTop) {
      $('.p_about__sign__animate').css({'display':'block'});
    }
  });
}