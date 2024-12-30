
// JavaScript Document
$(document) .ready(function(e) {
  $(".menu-trigger") .click(function(e) {
    $(".navigation") .slideToggle(400, function() {
      $(this) .toggleClass("navs") .css('display', '')	 
    });
  });
});


// owl-slider
document.addEventListener('DOMContentLoaded', function () {
  featuredSlider();
});

featuredSlider = ()=> {
  $('.reviews .owl-carousel, .service .owl-carousel').owlCarousel({
      loop:true,
      margin:25,
      nav:true,
      dots:true,
      autoplay:false,
      autoplayInterval:20000,
      navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
      responsive:{
          0:{
              items:1
          },
          600:{
              items:1
          },
          1000:{
              items:1
          }
      }
  })
}

//back to top
  $(function(){
    $("body").append('<div class="backtotop"><i class="fa fa-angle-up" aria-hidden="true"></i></div>');
      $(window).scroll(function() {
        if ($(this).scrollTop() > 10) {
          $('.backtotop').fadeIn();
        } else {
          $('.backtotop').fadeOut();
        }
      });

    $(".backtotop").click(function(){	
        $("html, body").animate({scrollTop: 0}, 1000);
    }); 
  });
  