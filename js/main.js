$(document).ready(function() {

  // スムーススクロール
  $('a[href^="#"]').click(function() {
    let header = $('.header').innerHeight();
    let speed = 500;
    let id = $(this).attr("href");
    let target = $(id == "#" || id == "" ? 'html' : id);
    let position = target.offset().top - header;
    $("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
  });

  // ヘッダー色反転
  $(window).scroll(function() {
    if($(this).scrollTop() > 466) {
      $(".header").addClass("is-active");
    } else {
      $(".header").removeClass("is-active");
    }
  });

  // ドロワーアイコン
  $(".drawer-icon").on('click', function() {
    $(this).toggleClass('is-active');
    $('.drawer-content-cover').toggleClass('is-active');
    return false;
  });

  $('.work-slider').slick({
    dots: true,
    infinite: true,
    speed: 2000,
    // slidesToShow: 1,
    // adaptiveHeight: true,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
 });
});