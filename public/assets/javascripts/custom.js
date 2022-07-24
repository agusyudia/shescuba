$(document).ready(function() {

  "use strict";

  // -------------- Preloader -------------- 
  $(".preloader").addClass('animated fadeOut');
  setTimeout(function(){
    $(".preloader").addClass('loaded');
  }, 1000);

  // -------------- Typed -------------- 
  
  $("#typed").typed({
    strings: ["Passionate Adventurer", "Experienced Explorer", "Professional Diver"],
    typeSpeed: 30,
    startDelay: 0,
    backSpeed: 30,
    backDelay: 3000,
    loop: true,
    loopCount: false,
    showCursor: true,
    attr: null,
    contentType: 'html',
    callback: function() {},
    preStringTyped: function() {},
    onStringTyped: function() {},
    resetCallback: function() {}
  });

  // -------------- Dropdown -------------- 

  if ($('html').hasClass('no-touchevents')) {
    $(".dropdown").hover(
      function() { $('.dropdown-menu', this).fadeIn("fast");
      },
      function() { $('.dropdown-menu', this).fadeOut("fast");
    });
  };

  // -------------- CountTo -------------- 
  
  $('.project-counter').appear(function() {
    $('.counter-number').each(count);
    function count(options) {
      var $this = $(this);
      options = $.extend({}, options || {}, $this.data('countToOptions') || {});
      $this.countTo(options);
    }
  });

  // -------------- Parallax -------------- 
  var window_width = $(window).width();
  
  if( window_width > 992 ){
    $('.parallax-section').parallax("50%", 0.1);
  }

  // -------------- Slick -------------- 

	$('.testimonial-slider').slick({
	  infinite: true,
	  slidesToShow: 3,
	  slidesToScroll: 3,
    arrows: false,
    dots: true,
	  responsive: [
	    {
	      breakpoint: 1024,
	      settings: {
	        slidesToShow: 3,
	        slidesToScroll: 3,
	        infinite: true,
	        dots: true
	      }
	    },
	    {
	      breakpoint: 768,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 2
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1
	      }
	    }
	  ]
	});

   $('.team-slider').slick({
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  arrows: false,
	  fade: true,
	  asNavFor: '.slider-nav'
	});

	$('.team-slider-nav').slick({
	  slidesToShow: 4,
	  slidesToScroll: 1,
	  asNavFor: '.team-slider',
	  centerMode: true,
    arrows: false,
	  focusOnSelect: true,
	  responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 3
      }
    },
    {
      breakpoint: 640,
      settings: {
        slidesToShow: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1
      }
    }]
	});

  $('.team-carousel').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3,    
    dots: true,
    arrows: false,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  $('.client-logos').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: false, 
    autoplay: true,
    autoplaySpeed: 3000,
    responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 3
      }
    },
    {
      breakpoint: 640,
      settings: {
        slidesToShow: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1
      }
    }]
  });

  $('.gallery-carousel').slick({
    centerMode: true,
    slidesToShow: 3,
    focusOnSelect: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 3
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });


  // -------------- Wow -------------- 

  var wow = new WOW(
    {
      animateClass: 'animated',
      mobile: false
    }
  );
  wow.init();

  // -------------- Lightbox -------------- 

  $('.grouped-image-list a').vanillabox();

  // -------------- Bootstrap Carousel -------------- 

  $('.carousel').carousel({
    interval: 7000
  });   
	
	// -------------- On Scroll Navbar Effect -------------- 

  var window_width = $(window).width();

  $(window).scroll(function(){  
    "use strict"; 
    var scroll = $(window).scrollTop();
    if( scroll > 60 ){
      $(".navbar").addClass("scroll-fixed-navbar");
    } else {
      $(".navbar").removeClass("scroll-fixed-navbar");
    }
  });

  // -------------- Related Project --------------

  $('.related-project .prev-project').on('mouseover', function() {
    $('.related-project .prev-project').removeClass("lighter");
    $('.related-project .next-project').addClass("lighter");
  });

  $('.related-project .next-project').on('mouseover', function() {
    $('.related-project .next-project').removeClass("lighter");
    $('.related-project .prev-project').addClass("lighter");
  });

  // -------------- Product Showcase -------------- 

  $('.sp-wrap').smoothproducts();

  // -------------- Countdown -------------- 

  $('.countdown').downCount({
    date: '06/10/2017 12:00:00',
    offset: +10
  });

});


$(window).load(function() {
	$(".image-slider-bg").slick({
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  autoplay: true,
	  speed: 30000,
	  autoplaySpeed: 0,
	});

  // -------------- Jquery Masonry Setting -------------- 

  var $container = $('.masonry-grid');

  $container.imagesLoaded( function() {
    $container.masonry({
      itemSelector: '.masonry-item'
    });
  });

  // -------------- Jquery Isotope Setting -------------- 

  var $container = $('.isotope-wrap');
  $container.isotope({
    filter: '*',
    itemSelector: '.element-item',
    animationOptions: {
      duration: 750,
      easing: 'linear',
      queue: false
    }
  });

  $('.portfoliofilter a').on('click', function(e) {
    e.preventDefault();
    $('.portfoliofilter .current').removeClass('current');
    $(this).addClass('current');

    var selector = $(this).attr('data-filter');
    $container.isotope({
      filter: selector,
      animationOptions: {
        duration: 750,
        easing: 'linear',
        queue: false
      }
     });
     return false;
  });
});
