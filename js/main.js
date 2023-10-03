$('#testimonial').owlCarousel({
  loop:true,
  margin:10,
  nav:true,
  dots: true,
  autoplay:true,
  autoplayTimeout:5000,
  autoplayHoverPause:true,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:2
      },
      1000:{
          items:3
      }
  }
});

$('#portfolioSlider').owlCarousel({
  loop:true,
  margin:10,
  nav:true,
  dots: true,
  autoplay:true,
  autoplayTimeout:2000,
  autoplayHoverPause:true,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:2
      },
      1000:{
          items:2
      }
  }
});

$('#achiveslider').owlCarousel({
  loop:true,
  margin:10,
  nav:true,
  dots: true,
  autoplay:true,
  autoplayTimeout:2000,
  autoplayHoverPause:true,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:3
      },
      1000:{
          items:2
      }
  }
});

$('#blog').owlCarousel({
  loop:true,
  margin:10,
  nav:true,
  dots: true,
  autoplay:true,
  autoplayTimeout:2000,
  autoplayHoverPause:true,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:2
      },
      1000:{
          items:3
      }
  }
});

$('#bannerContent').owlCarousel({
  loop:true,
  margin:10,
  nav:true,
  dots: false,
  autoplay:true,
  autoplayTimeout:2000,
  autoplayHoverPause:true,
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
});

  
  // $(document).ready(function ($) {
  //     //Check if an element was in a screen
  //     function isScrolledIntoView(elem) {
  //         var docViewTop = $(window).scrollTop();
  //         var docViewBottom = docViewTop + $(window).height();
  //         var elemTop = $(elem).offset().top;
  //         var elemBottom = elemTop + $(elem).height();
  //         return elemBottom <= docViewBottom;
  //     }
  //     //Count up code
  //     function countUp() {
  //         $(".counter").each(function () {
  //             var $this = $(this), // <- Don't touch this variable. It's pure magic.
  //                 countTo = $this.attr("data-count");
  //             ended = $this.attr("ended");
  
  //             if (ended != "true" && isScrolledIntoView($this)) {
  //                 $({ countNum: $this.text() }).animate(
  //                     {
  //                         countNum: countTo,
  //                     },
  //                     {
  //                         duration: 2500, //duration of counting
  //                         easing: "swing",
  //                         step: function () {
  //                             $this.text(Math.floor(this.countNum));
  //                         },
  //                         complete: function () {
  //                             $this.text(this.countNum);
  //                         },
  //                     },
  //                 );
  //                 $this.attr("ended", "true");
  //             }
  //         });
  //     }
  //     //Start animation on page-load
  //     if (isScrolledIntoView(".counter")) {
  //         countUp();
  //     }
  //     //Start animation on screen
  //     $(document).scroll(function () {
  //         if (isScrolledIntoView(".counter")) {
  //             countUp();
  //         }
  //     });
  // });
  

  
  