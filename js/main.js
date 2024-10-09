/*
	Appdent Theme Scripts
*/

(function($){ "use strict";
             
    $(window).on('load', function() {
        $('body').addClass('loaded');
    });

/*=========================================================================
	Sticky Header
=========================================================================*/ 
	$(function() {
		var header = $("#header"),
			yOffset = 0,
			triggerPoint = 80;
		$(window).on( 'scroll', function() {
			yOffset = $(window).scrollTop();

			if (yOffset >= triggerPoint) {
				header.addClass("navbar-fixed");
			} else {
				header.removeClass("navbar-fixed");
			}

		});
	});
             
/*=========================================================================
   App Carousel
=========================================================================*/
    $('#app_carousel').owlCarousel({
        loop:true,
        margin: 20,
        autoplay: true,
        responsiveClass:true,
        smartSpeed: 500,
        dots: false,
        nav:true,
        navText: ['<i class=" arrow_carrot-left"></i>', '<i class=" arrow_carrot-right"></i>'],
        responsive:{
            0:{
                items:1
            },
            400:{
                items:2
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
        
    });

/*=========================================================================
	Testimonial Carousel
=========================================================================*/
    $('#testimonial_carousel').owlCarousel({
        loop: true,
        autoplay: true,
        smartSpeed: 500,
        items: 1,
        nav: false
    });
			 
/*=========================================================================
	Counter Up Active
=========================================================================*/
	var counterSelector = $('.counter');
	counterSelector.counterUp({
		delay: 10,
		time: 1000
	});
			 
/*=========================================================================
	Initialize smoothscroll plugin
=========================================================================*/
	smoothScroll.init({
		offset: 60
	});

/*=========================================================================
	Active venobox
=========================================================================*/
	var vbSelector = $('.img_popup');
	vbSelector.venobox({
		numeratio: true,
		infinigall: true
	}); 
				 
/*=========================================================================
	Scroll To Top
=========================================================================*/ 
    $(window).on( 'scroll', function () {
        if ($(this).scrollTop() > 100) {
            $('#scroll-to-top').fadeIn();
        } else {
            $('#scroll-to-top').fadeOut();
        }
    });
             

/*=========================================================================
    wow Settings
=========================================================================*/
    var wow = new WOW( {
        mobile: false,
        offset: 150
    });
    wow.init();
	
/*=========================================================================
	MAILCHIMP
=========================================================================*/ 

    if ($('.subscribe_form').length>0) {
        /*  MAILCHIMP  */
        $('.subscribe_form').ajaxChimp({
            language: 'es',
            callback: mailchimpCallback,
            url: "//alexatheme.us14.list-manage.com/subscribe/post?u=48e55a88ece7641124b31a029&amp;id=361ec5b369" 
        });
    }

    function mailchimpCallback(resp) {
        if (resp.result === 'success') {
            $('#subscribe-result').addClass('subs-result');
            $('.subscription-success').text(resp.msg).fadeIn();
            $('.subscription-error').fadeOut();

        } else if(resp.result === 'error') {
            $('#subscribe-result').addClass('subs-result');
            $('.subscription-error').text(resp.msg).fadeIn();
        }
    }
    $.ajaxChimp.translations.es = {
        'submit': 'Submitting...',
        0: 'We have sent you a confirmation email',
        1: 'Please enter your email',
        2: 'An email address must contain a single @',
        3: 'The domain portion of the email address is invalid (the portion after the @: )',
        4: 'The username portion of the email address is invalid (the portion before the @: )',
        5: 'This email address looks fake or invalid. Please enter a real email address'
    };

})(jQuery);

document.addEventListener('DOMContentLoaded', () => {

    // Unix timestamp (in seconds) to count down to
    var twoDaysFromNow = (new Date().getTime() / 1000) + (86400 * 2) + 1;
  
    // Set up FlipDown
    var flipdown = new FlipDown(twoDaysFromNow)
  
      // Start the countdown
      .start()
  
      // Do something when the countdown ends
      .ifEnded(() => {
        console.log('The countdown has ended!');
      });
  
    // Toggle theme
    var interval = setInterval(() => {
      let body = document.body;
      body.classList.toggle('light-theme');
      body.querySelector('#flipdown').classList.toggle('flipdown__theme-dark');
      body.querySelector('#flipdown').classList.toggle('flipdown__theme-light');
    }, 5000);
  
    // Show version number
    var ver = document.getElementById('ver');
    ver.innerHTML = flipdown.version;
  });
  
/*========================================================================
    Imported Templates from other templates
=========================================================================*/

(function($) {
    var App = { init: function() { App.HomepageHeight();
                                   App.HomepageOpacity();
                                   App.MaxImage_Video();
                                   App.MaxImage_Slider();
                                   App.MaxImage_Single();
                                   App.ScrollToSomeplace();
                                   App.Count_Down();
                                   App.FormValidation();
                                   App.ContactForm();},
    
    
        // Homepage Height
        HomepageHeight: function() {
        "use strict"; 
            var h = window.innerHeight;
            $('.hero_fullscreen').css('height', h );
            $('.mockup').css('height', h );
        },
        
        
        // Homepage Opacity - for single background image version
        HomepageOpacity: function() {
        "use strict"; 
            var h = window.innerHeight;
            $(window).on('scroll', function() {
                var st = $(this).scrollTop();
                $('#maximage_single').css('opacity', (1-st/h) );
            });
        },
        
        
        // MaxImage Fullscreen Background Slider
        MaxImage_Video: function() {
        "use strict";
            jQuery('video, object').maximage('maxcover');
            
            // detecting if browser is mobile and disabling the video background, leaving only poster as bg.
            if( navigator.userAgent.match(/Android/i)
            || navigator.userAgent.match(/webOS/i)
            || navigator.userAgent.match(/iPhone/i)
            || navigator.userAgent.match(/iPad/i)
            || navigator.userAgent.match(/iPod/i)
            || navigator.userAgent.match(/BlackBerry/i)
            || navigator.userAgent.match(/Windows Phone/i)
             ){
                $('#maximage_video video').css('display', 'none' );
                classie.add( document.getElementById( 'maximage_video' ), 'mobile_novideo' );
              };
        },
        
        
        // MaxImage Fullscreen Background Slider
        MaxImage_Slider: function() {
        "use strict"; 
            $('#maximage_slider').maximage();
        },
        
        
        // MaxImage Fullscreen Background Slider
        MaxImage_Single: function() {
        "use strict";
            $('#maximage_single').maximage();
        },
        
        
        // Scroll To ...
        ScrollToSomeplace: function() {
        $('#more_info_btn').click(function () {$.scrollTo('#more_info',1000,{easing:'easeInOutExpo','axis':'y'});return false});
        },
        
        
        // Counter ... 
        Count_Down: function() {
        "use strict"; 
            $("#countdown").countdown({
            date: "17 October 2024 09:00:00", // Change this to your desired date to countdown to
            format: "on"
            });
        },
        
        
        // Newsletter Form Validation
        FormValidation: function() {
            function isValidEmailAddress(emailAddress) {
            var pattern = new RegExp(/^(("[\w-+\s]+")|([\w-+]+(?:\.[\w-+]+)*)|("[\w-+\s]+")([\w-+]+(?:\.[\w-+]+)*))(@((?:[\w-+]+\.)*\w[\w-+]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][\d]\.|1[\d]{2}\.|[\d]{1,2}\.))((25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\.){2}(25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\]?$)/i);
            return pattern.test(emailAddress);
            };
        
            $('#subscribe-form').isHappy({
            submitButton: '#subscribe-form-submit',
            fields: {
              '#email': {
                required: true,
                message: 'Please enter a valid e-mail address!',
                test: isValidEmailAddress
              }
            }
            });
        },
        
        
        // Contact Form
        ContactForm: function() {
             "use strict";
            var options = {target: "#alert"}
            $("#contact-form").ajaxForm(options);
        },
    
    }
    
    
    $(function() {
      App.init();
      $(window).resize(App.HomepageHeight);  
    });
    
    })(jQuery);