/*
	Template Name: Cornike - Business HTML5 Template
	Author: Tripples
	Author URI: https://themeforest.net/user/tripples
	Description: Cornike - Business HTML5 Template
	Version: 1.0

	1. Fixed header
	2. Main slideshow
	3. Site search
	4. Owl Carousel
	5. Video popup
	6. Counter
	7. Contact form
	8. Back to top
  
*/


jQuery(function($) {
  "use strict";

  	/* Pre loader */

	function handlePreloader() {

		if($('.preload').length){
			$('.preload').delay(220).fadeOut(500);
		}
	}

	/* ----------------------------------------------------------- */
	/*  Fixed header
	/* ----------------------------------------------------------- */

	$(window).on('scroll', function(){
		if ( $(window).scrollTop() > 70 ) {
			$('.site-navigation, .header-white, .header').addClass('navbar-fixed');
		} else {
			$('.site-navigation, .header-white, .header').removeClass('navbar-fixed');
		}
	});

	/* ----------------------------------------------------------- */
	/*  Mobile Menu
	/* ----------------------------------------------------------- */

	jQuery(".nav.navbar-nav li a").on("click", function() { 
		jQuery(this).parent("li").find(".dropdown-menu").slideToggle();
		jQuery(this).find("i").toggleClass("fa-angle-down fa-angle-up");
	});


	/* ----------------------------------------------------------- */
	/*  Main slideshow
	/* ----------------------------------------------------------- */

		$('#main-slide').carousel({
			pause: true,
			interval: 100000,
		});


	/* ----------------------------------------------------------- */
  	/*  Site search
  	/* ----------------------------------------------------------- */



	 $('.nav-search').on('click', function () {
		 $('.search').fadeIn(500);
	});

	 $('.search-close').on('click', function(){
			  $('.search').fadeOut(500);
	 });



  	/* ----------------------------------------------------------- */
  	/*  Owl Carousel
  	/* ----------------------------------------------------------- */


		//Project slide

		$("#project-slide").owlCarousel({

			loop:true,
			animateOut: 'fadeOut',
			nav:true,
			margin:15,
			dots:false,
			mouseDrag:true,
			touchDrag:true,
			slideSpeed:800,
			navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
			items : 4,
			responsive:{
			  0:{
					items:2
			  },
			  600:{
					items:4
			  }
			}

		});


		//Testimonial slide

		$("#testimonial-slide").owlCarousel({

			loop:false,
			margin:30,
			nav:false,
			dots:true,
			items : 3,
			responsive:{
			  0:{
					items:1
			  },


			  600:{
					items:2
			  }
			}

		});

		//Testimonial slide 2

		$("#testimonial-slide2").owlCarousel({

			loop:false,
			margin:30,
			nav:false,
			dots:true,
			items : 3,
			responsive:{
			  0:{
					items:1
			  },


			  600:{
					items:1
			  }
			}

		});



		//Partners slide

		$("#partners-carousel").owlCarousel({

			loop:true,
			margin:20,
			nav:false,
			dots:false,
			mouseDrag:true,
			touchDrag:true,
			items : 5,
			responsive:{
			  0:{
					items:2
			  },
			  600:{
					items:5
			  }
			}

		});

		 //Page slide

		$(".page-slider").owlCarousel({

			loop:true,
			animateOut: 'fadeOut',
			autoplay:true,
			autoplayHoverPause:true,
			nav:true,
			margin:0,
			dots:false,
			mouseDrag:true,
			touchDrag:true,
			slideSpeed:500,
			navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
			items : 1,
			responsive:{
			  0:{
					items:1
			  },
			  600:{
					items:1
			  }
			}

		});


		 //Team slide

		 $("#team-slide").owlCarousel({

			loop:false,
			animateOut: 'fadeOut',
			nav:true,
			navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
			margin:20,
			dots:false,
			mouseDrag:true,
			touchDrag:true,
			slideSpeed:800,
			items : 4,
			responsive:{
				0:{
				items:1
				},
				480:{
					items:2
				},
				1000:{
					items:4,
					loop:false
				}
			}

		});


	/* ----------------------------------------------------------- */
	/*  Video popup
	/* ----------------------------------------------------------- */
	  $(document).ready(function(){

			$(".gallery-popup").colorbox({rel:'gallery-popup', transition:"fade", innerHeight:"500"});

			$(".popup").colorbox({iframe:true, innerWidth:600, innerHeight:400});

	  });



	/* ----------------------------------------------------------- */
	/*  Counter
	/* ----------------------------------------------------------- */

		$('.counterUp').counterUp({
		 delay: 10,
		 time: 1000
		});


	
	/* ----------------------------------------------------------- */
	/*  Contact form
	/* ----------------------------------------------------------- */

	$('#contact-form').submit(function(){

		var $form = $(this),
			$error = $form.find('.error-container'),
			action  = $form.attr('action');

		$error.slideUp(750, function() {
			$error.hide();

			var $name = $form.find('.form-control-name'),
				$email = $form.find('.form-control-email'),
				$subject = $form.find('.form-control-subject'),
				$message = $form.find('.form-control-message');

			$.post(action, {
					name: $name.val(),
					email: $email.val(),
					subject: $subject.val(),
					message: $message.val()
				},
				function(data){
					$error.html(data);
					$error.slideDown('slow');

					if (data.match('success') != null) {
						$name.val('');
						$email.val('');
						$subject.val('');
						$message.val('');
					}
				}
			);

		});

		return false;

	});


	/* ----------------------------------------------------------- */
	/*  Back to top
	/* ----------------------------------------------------------- */

		$(window).scroll(function () {
			if ($(this).scrollTop() > 50) {
				 $('#back-to-top').fadeIn();
			} else {
				 $('#back-to-top').fadeOut();
			}
		});

		// scroll body to 0px on click
		$('#back-to-top').on('click', function () {
			 $('#back-to-top').tooltip('hide');
			 $('body,html').animate({
				  scrollTop: 0
			 }, 800);
			 return false;
		});
		
		$('#back-to-top').tooltip('hide');

		/* Preloade */

		$(window).on('load', function() {
			handlePreloader();
		});

});