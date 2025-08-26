AOS.init({
 	duration: 800,
 	easing: 'slide',
 	once: true
});

$.ajaxSetup({
	headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	}
});

jQuery(document).ready(function($) {

	"use strict";
	var siteMenuClone = function() {

		$('.js-clone-nav').each(function() {
			var $this = $(this);
			$this.clone().attr('class', 'site-nav-wrap').appendTo('.site-mobile-menu-body');
		});


		setTimeout(function() {
			
		var counter = 0;
      $('.site-mobile-menu .has-children').each(function(){
        var $this = $(this);
        
        $this.prepend('<span class="arrow-collapse collapsed">');

        $this.find('.arrow-collapse').attr({
          'data-toggle' : 'collapse',
          'data-target' : '#collapseItem' + counter,
        });

        $this.find('> ul').attr({
          'class' : 'collapse',
          'id' : 'collapseItem' + counter,
        });

        counter++;

      });

    }, 1000);

		$('body').on('click', '.arrow-collapse', function(e) {
      var $this = $(this);
      if ( $this.closest('li').find('.collapse').hasClass('show') ) {
        $this.removeClass('active');
      } else {
        $this.addClass('active');
      }
      e.preventDefault();  
      
    });

		$(window).resize(function() {
			var $this = $(this),
				w = $this.width();

			if ( w > 768 ) {
				if ( $('body').hasClass('offcanvas-menu') ) {
					$('body').removeClass('offcanvas-menu');
				}
			}
		})

		$('body').on('click', '.js-menu-toggle', function(e) {
			var $this = $(this);
			e.preventDefault();

			if ( $('body').hasClass('offcanvas-menu') ) {
				$('body').removeClass('offcanvas-menu');
				$this.removeClass('active');
			} else {
				$('body').addClass('offcanvas-menu');
				$this.addClass('active');
			}
		}) 

		// click outisde offcanvas
		$(document).mouseup(function(e) {
	    var container = $(".site-mobile-menu");
	    if (!container.is(e.target) && container.has(e.target).length === 0) {
	      if ( $('body').hasClass('offcanvas-menu') ) {
					$('body').removeClass('offcanvas-menu');
				}
	    }
		});
	}; 
	siteMenuClone();

	// Scroll to top button
	var btn = $('#button');

	$(window).scroll(function() {
	  if ($(window).scrollTop() > 300) {
	    btn.addClass('show');
	  } else {
	    btn.removeClass('show');
	  }
	});

	btn.on('click', function(e) {
	  e.preventDefault();
	  $('html, body').animate({scrollTop:0}, '500');
	});

	

	$(document).ready(function() {

	    var scrollnow = function(e) {
	        // if scrollnow()-function was triggered by an event
	        if (e) {
	            e.preventDefault();
	            var target = this.hash;
	        }
	        // else it was called when page with a #hash was loaded
	        else {
	            var target = location.hash;
	        }

	        // same page scroll
	        $.smoothScroll({
	            scrollTarget: target
	        });
	    };

	    // if page has a #hash
	    if (location.hash) {
	    	toggleAccordian(location.hash);
	        $('html, body').scrollTop(0).show();
	        // smooth-scroll to hash
	        scrollnow();
	    }

	    $('a .oceanfreight').click(scrollnow);

	    $( ".card" ).hover(
		  function() {
		    $(this).removeClass('shadow-sm').addClass('shadow').css('cursor', 'pointer'); 
		  }, function() {
		    $(this).removeClass('shadow').addClass('shadow-sm');
		  }
		);

	});

	function toggleAccordian(hash) {
		console.log(hash);
    	if(hash == '#headingOne') {
        	$("#collapseOne").collapse("show");
        	$("#collapseTwo").collapse("hide");
        	$("#collapseThree").collapse("hide");
        	$("#collapseFour").collapse("hide");
        	$("#collapseFive").collapse("hide");
        }else if(hash == '#headingTwo') {
        	$("#collapseOne").collapse("hide");
        	$("#collapseTwo").collapse("show");
        	$("#collapseThree").collapse("hide");
        	$("#collapseFour").collapse("hide");
        	$("#collapseFive").collapse("hide");
        }else if(hash == '#headingThree') {
        	$("#collapseOne").collapse("hide");
        	$("#collapseTwo").collapse("hide");
        	$("#collapseThree").collapse("show");
        	$("#collapseFour").collapse("hide");
        	$("#collapseFive").collapse("hide");
        }else if(hash == '#headingFour') {
        	$("#collapseOne").collapse("hide");
        	$("#collapseTwo").collapse("hide");
        	$("#collapseThree").collapse("hide");
        	$("#collapseFour").collapse("show");
        	$("#collapseFive").collapse("hide");
        }else if(hash == '#headingFive') {
        	$("#collapseOne").collapse("hide");
        	$("#collapseTwo").collapse("hide");
        	$("#collapseThree").collapse("hide");
        	$("#collapseFour").collapse("hide");
        	$("#collapseFive").collapse("show");
        }
	}

});