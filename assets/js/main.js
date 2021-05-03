// START:: HANDILING PRELOADER
$(window).on('load', function() {
  $(".pre_loader").fadeOut('slow');
})
// END:: HANDILING PRELOADER

$(document).ready( function() {
  // START:: STIKY NAVBAR
  $(window).on('scroll',function() {
    if ( $(window).scrollTop() ) {
      $('.main_nav').addClass('stiky');
    } else {
      $('.main_nav').removeClass('stiky');
    }
  });
  // END:: STIKY NAVBAR

  // START:: WOW JS
  wow = new WOW(
    {
    boxClass:     'wow',     
    animateClass: 'animated',
    offset:       150,         
    mobile:       false,      
    live:         true       
  }
  )
  wow.init();
  // END:: WOW JS

  // START:: TOGGLE MENU
  $('#open_menu').on('click', () => {
    $('.small_menu').css('display', 'flex');
    setTimeout(() => {
      $('.small_menu').css('right', '0');
    }, 300);
    $('body').css('overflow', 'hidden');
  });

  $('#colse_menu').on('click', () => {
    $('.small_menu').css('right', '-100%');
    setTimeout(() => {
      $('.small_menu').css('display', 'none');
    }, 1000);
    $('body').css('overflow-y', 'auto');
  });
  // END:: TOGGLE MENU

  // START:: OWL CAROUSEL
  $('#clients').owlCarousel({
    loop:true,
    autoplay:true,
    autoplayTimeout:6000,
    autoplayHoverPause:true,
    margin:10,
    nav: false,
    dots: false,
    items:1,
    rtl: true, 
    smartSpeed: 2000,
    dotsSpeed: 2000,
    responsive:{
      0:{
        items:2,
        nav:false,
        loop:true
      },
      600:{
        items:4,
        nav:false,
        loop:true
      },
      1000:{
        items:6,
        nav:false,
        loop:true
      }
    }
  });

  $('#testemonials').owlCarousel({
    loop:true,
    autoplay:true,
    autoplayTimeout:6000,
    autoplayHoverPause:true,
    margin:30,
    nav: false,
    dots: true,
    items:2,
    rtl: true, 
    smartSpeed: 2000,
    dotsSpeed: 2000,
    responsive:{
      0:{
        items:1,
        nav:false,
        loop:true
      },
      600:{
        items:1,
        nav:false,
        loop:true
      },
      1000:{
        items:2,
        nav:false,
        loop:true
      }
    }
  });
  // END:: OWL CAROUSEL

  // START:: TOGGLE FORMS
  $('#show_register').on('click', function() {
    $('#login_form_wraper').css('display', 'none');
    $('#login_form_wraper').css('display', 'none');
    $('#signup_form_wraper').css('display', 'block');
  });

  $('#show_reset').on('click', function() {
    $('#login_form_wraper').css('display', 'none');
    $('#signup_form_wraper').css('display', 'none');
    $('#reset_form_wraper').css('display', 'block');
  });
  // END:: TOGGLE FORMS

  // START:: FLEX SLIDER
  // $('#carousel').flexslider({
  //   animation: "slide",
  //   controlNav: true,
  //   animationLoop: true,
  //   slideshow: true,
  //   itemWidth: 160,
  //   itemMargin: 0,
  //   asNavFor: '#slider'
  // });

  // $('#slider').flexslider({
  //   animation: "slide",
  //   controlNav: false,
  //   animationLoop: false,
  //   slideshow: false,
  //   sync: "#carousel"
  // });
  // END:: FLEX SLIDER

  // START:: BOOTSTRAP SELECT
  $('#qualifications').selectpicker();
  $('#years').selectpicker();
  // END:: BOOTSTRAP SELECT

  // START:: CART INCREASE & DECREASE BTNS
  $(".plus_btn").on('click', function() {
    let productAmount = parseInt($(this).parent().siblings('.amount').text());
    productAmount += 1;
    $(this).parent().siblings('.amount').text(productAmount);
  });

  $(".minus_btn").on('click', function() {
    let productAmount = parseInt($(this).parent().siblings('.amount').text());
    productAmount -= 1;
    $(this).parent().siblings('.amount').text(productAmount);
  });
  // END:: CART INCREASE & DECREASE BTNS
});
