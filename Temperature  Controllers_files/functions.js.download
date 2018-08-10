// JavaScript Document

(function($){

	function hideMobileMenu(){
		if ($(window).width() >= 979 ){
			$('#mobile_menu').hide();
		}
	}
	function showMobileMenu(){
		if ($(window).width() < 980 ){
			$('#mobile_menu').show();
		}
	}
	function hideBrowserMenu(){
		if ($(window).width() < 978 ){
			$('#navigation').hide();
		}
	}
	function hideSearch(){
		if ($(window).width() < 978 ){
			$('#search').hide();
		}else {
			$('#search').show();
		}
	}
	function showBrowserMenu(){
		if ($(window).width() > 978 ){
			$('#navigation').show();
		}
	}
	function addToBody() {
		if ($(window).width() >= 979 ){
			$('body').removeClass('mobile').removeClass('tablet').addClass('standard');
		}
		else if ($(window).width() < 979 && $(window).width() > 600) {
			$('body').removeClass('mobile').removeClass('standard').addClass('tablet');
		} else {
			$('body').removeClass('standard').removeClass('tablet').addClass('mobile');
		}
	}
	function resizeHeader(){
		if ($(window).width() >= 979 ){
			$('header').removeClass('mobile').addClass('large');
			$(".container").removeClass('mobile').addClass('large');
			$("#headerlinks").removeClass('mobile').addClass('large');
		}else if ($(window).width() < 979 && $(window).width() > 600) {
			$('header').removeClass('mobile').addClass('large');
			$(".container").removeClass('mobile').addClass('large');
			$("#headerlinks").removeClass('mobile').addClass('large');
		}else {
			$('header').removeClass('large').addClass('mobile');
			$(".container").removeClass('large').addClass('mobile');
			$("#headerlinks").removeClass('large').addClass('mobile');
		}
	}
	function switchLogo(){
		if ($(window).width() >= 979 ){
			$('#logo').removeClass('mobile');
			$('img.standard').show();
			$('img.mobile').hide();
		}else {
			$('#logo').addClass('mobile');
			$('img.standard').hide();
			$('img.mobile').show();
		}
	}
	function goTo(name) {
	var t = name;
	if (typeof k !== 'undefined' && k == 'set'){
		var x = $(t).position();
		$('html,body').animate({ scrollTop: [(x.top), "easeOutCirc"] }, 1800);
	}else{
		var x = $(t).position();
		$('html,body').animate({ scrollTop: [(x.top), "easeOutCirc"] }, 1800);
		k = 'set';
	}
	}
	$(document).ready(function() {
		NProgress.start();
		hideMobileMenu();
		hideBrowserMenu();
		showMobileMenu();
		showBrowserMenu();
		resizeHeader();
		switchLogo();
		hideSearch();
		addToBody();
		
		$(window).scrollTop(0);
		if ($(window).width() > 600) { 
			$('article.left.product > p > img').each(function() { 
				var imgAlt = $(this).attr('alt');
				var imgOffsetTop = $(this).offset().top;
				var scrollTop = $(window).scrollTop()+1;
				var screenHeight = $(window).height();
				var docHeight = $(document).height();
				var Ypos = imgOffsetTop - $(window).scrollTop() + 'px';
				var imgOffsetLeft = $(this).offset().left + 'px';
				var leftOffset = ($(window).width()-950)/2 + 'px';
				var newDiv = "<div class=\"productCaption\" style=\"top:" + Ypos + ";left:" + leftOffset + ";\">" + imgAlt + "</div>";
	
				$(this).hover(function() { 
					$(this).after(newDiv);
				}, function() { 
					$('.productCaption').remove();
				});
			});
		}
		
		$('#quote_component').click(function() { 
			window.open('http://www.kecocontrols.com/contact');
		});
		
		
		$("#mobile_menu_trigger").click(function() {
			$("nav > ul").slideToggle();
		});
		var submenuOpen = false;
		$(".mobile nav li, .tablet nav li").has('ul.submenu').click(function() {
			if (submenuOpen == false) { 
				$('li', this).animate({'height' : '37px'}, 600).find('a').click(function() { 
					var href = $(this).attr('href');
					window.location = href;
				});
				submenuOpen = true;
			} else { 
				$('li', this).css({'height' : '0px'});
				submenuOpen = false;
			}
			return false;
			});
		if ($(window).width() >= 979 ){
			//functions to run if full size
		  
		}
		if ($(window).width() >= 979 ){
      $('#slides').slidesjs({
        width: 626,
        height: 300,
        navigation: {
          effect: "fade"
        },
        pagination: {
          effect: "fade"
        },
        effect: {
          fade: {
            speed: 400
          }
        }
      });
}

		if ($(window).width() < 978 ){
		$("#active2").hide();
		$("#active3").hide();
		$(function() {                        
        //Enable swiping...
        $("#active1").swipe( {
           //Generic swipe handler for all directions
           swipe:function(event, direction, distance, duration, fingerCount, counter) {
	      if (direction == 'right') {
			  $(this).hide();
			  $("#active3").show();
			  $("#active2").hide();
		  } if (direction == 'left') {
			  $(this).hide();
			  $("#active2").show();
			  $("#active3").hide();
		}
      },
      //Default is 75px, set to 0 for demo so any distance triggers swipe
      threshold:0
      });
	  $("#active2").swipe( {
           //Generic swipe handler for all directions
           swipe:function(event, direction, distance, duration, fingerCount, counter) {
	      if (direction == 'right') {
			  $(this).hide();
			  $("#active3").hide();
			  $("#active1").show();
		  } if (direction == 'left') {
			  $(this).hide();
			  $("#active1").hide();
			  $("#active3").show();
		}
      },
      //Default is 75px, set to 0 for demo so any distance triggers swipe
      threshold:0
      });
	  $("#active3").swipe( {
           //Generic swipe handler for all directions
           swipe:function(event, direction, distance, duration, fingerCount, counter) {
	      if (direction == 'right') {
			  $(this).hide();
			  $("#active2").show();
			  $("#active1").hide();
		  } if (direction == 'left') {
			  $(this).hide();
			  $("#active1").show();
			  $("#active2").hide();
		}
      },
      //Default is 75px, set to 0 for demo so any distance triggers swipe
      threshold:0
      });
    });
	
  }
  
  $("#manufacturers a").click(function() { 
  	var anchor_dest = $(this).attr('href');
  	goTo(anchor_dest);
	return false;
  });
   $("article.contact_top.product a").click(function() { 
  	var anchor_dest = $(this).attr('href');
  	goTo(anchor_dest);
	return false;
  });
  $('#search input:text').focus(
		function(){
        	this.value = '';
		});
	});
	
	$(window).load(function() { 
		NProgress.done();
		$('#loader').fadeOut();
		$(window).scrollTop(0);
	});

	$(window).resize(function(){
		hideMobileMenu();
		hideBrowserMenu();
		showMobileMenu();
		showBrowserMenu();
		resizeHeader();
		switchLogo();
		hideSearch();
		addToBody();
	});
	$(window).scroll(function() { 
	
	});

})(jQuery);
