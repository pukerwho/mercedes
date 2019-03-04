//Тест ютуба
(function() {
  var div, n,
  v = document.getElementsByClassName("youtube-player");
  for (n = 0; n < v.length; n++) {
    div = document.createElement("div");
    div.setAttribute("data-id", v[n].dataset.id);
    div.innerHTML = labnolThumb(v[n].dataset.id);
    div.onclick = labnolIframe;
    v[n].appendChild(div);
  }
})();

function labnolThumb(id) {
  var thumb = '<img src="https://i.ytimg.com/vi/ID/hqdefault.jpg">',
      play = '<div class="play"></div>';
  return thumb.replace("ID", id) + play;
}

function labnolIframe() {
  var iframe = document.createElement("iframe");
  var embed = "https://www.youtube.com/embed/ID?autoplay=1";
  iframe.setAttribute("src", embed.replace("ID", this.dataset.id));
  iframe.setAttribute("frameborder", "0");
  iframe.setAttribute("allowfullscreen", "1");
  this.parentNode.replaceChild(iframe, this);
}

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

//SWIPER VIDEO
if ($(document).width() > 960) {
  var mySwiperReviewVideo = new Swiper ('.swiper-review-video', {
    slidesPerView: 2,
    spaceBetween: 30,
    simulateTouch: false,
    loop: true,
    navigation: {
      nextEl: '.swiper-review-video-button-next',
      prevEl: '.swiper-review-video-button-prev',
    },
  });
};

//SWIPER VIDEO
if ($(document).width() > 960) {
  var mySwiperReviewPhoto = new Swiper ('.swiper-review-photo', {
    slidesPerView: 5,
    spaceBetween: 30,
    simulateTouch: false,
    loop: true,
    navigation: {
      nextEl: '.swiper-review-photo-button-next',
      prevEl: '.swiper-review-photo-button-prev',
    },
  });
};

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