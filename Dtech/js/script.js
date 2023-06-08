$(function () {

  // menu_fix 
  var menu = $('.navbar').offset().top;
  $(window).scroll(function () {
    var scroll = $(this).scrollTop();

    if (menu < scroll) {
      $('.navbar').addClass('menu_fix');
    } else {
      $('.navbar').removeClass('menu_fix');
    }
  });

  // bt_top
  $('.bt_top').click(function () {
    $('html, body').animate({
      scrollTop: 0,
    }, 1500);
  });

  $(window).scroll(function () {
    var abc = $(this).scrollTop();

    if (abc > 100) {
      $('.bt_top').fadeIn();
    } else {
      $('.bt_top').fadeOut();
    }
  });


  // Banner Slider
  $('.banner-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    speed: 2000,
    fade: true,
    arrows: false,
  });

  // team Slider
  $('.team_row').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    speed: 1000,
    arrows: false,
    responsive: [{
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
      }
    },
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
      }
    }
  ]
  });

  // team Slider
  $('.test_row').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    speed: 1500,
    arrows: false,
  });


  // counter-up 
  $('.counter').counterUp({
    delay: 10,
    time: 1000
  });

  // Venobox
  new VenoBox({
    selector: '.my-image-links',
    numeration: true,
    infinigall: true,
    share: true,
    spinner: 'rotating-plane'
  });


  // wow js
  wow = new WOW({
    boxClass: 'wow', // default
    animateClass: 'animated', // default
    offset: 0, // default
    mobile: true, // default
    live: true // default
  })
  wow.init();


  // scrollspy-js
  //scroll-spy & Smooth-scrolling

  var scrollLink = $('.scroll-link');
  $(scrollLink).on('click', function (event) {
    event.preventDefault();
    $('html,body').animate({
      scrollTop: $(this.hash).offset().top - 140
    }, 1000);
  });
  $(window).on('scroll', function () {
    var scrollTop = $(this).scrollTop();
    scrollLink.each(function () {
      var sectionhead = $(this.hash).offset().top - 160;
      if (scrollTop >= sectionhead) {
        $(this).parent().addClass('active');
        $(this).parent().siblings().removeClass('active');
      }
    });
  });


})

var containerEl = document.querySelector('.port_mix');

var mixer = mixitup(containerEl);