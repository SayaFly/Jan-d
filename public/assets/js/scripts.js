/* ----------------------------- 
Habbo-preloader
----------------------------- */
$(window).load(function() {
	'use strict';
	$('.preloader').delay(500).fadeOut();
	$('loading-habbo').delay(800).fadeOut('slow');
});


$(window).ready(function() {
	'use strict';
/*--------------------------------
Über uns und features tab
--------------------------------*/
	$('.tab-nav li').on('click', function(e) {
		var this_li = $(this),
			tabs = this_li.parent().parent(),
			target = $.trim(this_li.find('a').attr('href').substring(1)),
			all_tab_li = tabs.find('ul li');
			
			all_tab_li.removeClass('tab-selected').find('a[href="#'+ target +'"]')
			.parent().addClass('tab-selected');
			
			tabs.find('.tab').fadeIn();
			tabs.find('.tab:not(".'+ target +'")').hide();
			e.preventDefault();
			
	});

/*--------------------------------
One page Navigation 
--------------------------------*/
	$('.navigation').onePageNav({
		currentClass: 'current',
		scrollSpeed: 1000
	});

/*--------------------------------
Image Slider
--------------------------------*/
/*
	brauchen wir später..
	*/

/*--------------------------------
Countdown timer .. und so
--------------------------------*/
	$(".time").countdown({
		date: "july 14, 2019 20:00:00",
		leadingZero: true,
		htmlTemplate: '<div id="counter-day" class="countdown col-md-3 col-xs-6 col-sm-3"><div><span class="count-int"><b>%d</b></span><span class="count-text">Tage</span></div></div><div id="counter-hour" class="countdown col-md-3 col-xs-6 col-sm-3"><div><span class="count-int"><b>%h</b></span><span class="count-text">Stunden</span></div></div><div id="counter-min" class="countdown col-md-3 col-xs-6 col-sm-3"><div><span class="count-int"><b>%i</b></span><span class="count-text">Minuten</span></div></div><div id="counter-sec" class="countdown col-md-3 col-xs-6 col-sm-3 c_last"><div><span class="count-int"><b>%s</b></span><span class="count-text">Sekunden</span></div></div>',
	});

/*--------------------------------
Fixed navigation bar
--------------------------------*/
	$(window).scroll(function(e) {
		var scrollPos = $(window).scrollTop();
		if (scrollPos > 2) {
			$('.header').addClass('scrolling');
		} else {
			$('.header').removeClass('scrolling');
		}
	});
/*--------------------------------
musik... weil ers haben will like wtf
--------------------------------*/
	$('.progress').animate({
		width: '100%'
		}, 2500, function() {
		$('.loading').fadeOut(1000);
		setTimeout(function() {
			$('.loading').remove();
		}, 700);
				
		new WOW().init();
		});
			
			var audio = document.createElement('audio');
			audio.setAttribute('src', '/system/maintenance/lied/lied.mp3');
			audio.load();
			audio.addEventListener("load", function() {
				audio.play();
			}, true);
			
			audio.volume = 0.3;
			
			$('.soundControl').click(function() {
				if($('.soundControl').attr('data-playing') == 'true') {
					$('.soundControl').html('<i class="ion-volume-mute"></i>');
					$('.soundControl').attr('data-playing', 'false');
					audio.pause();
				} else {
					$('.soundControl').html('<i class="ion-volume-medium"></i>');
					$('.soundControl').attr('data-playing', 'true');
					audio.play();
				}
			});
			
			if($('.soundControl').attr('data-playing') == 'true') {
				audio.play();
			}
			window.onerror = function(message, url, lineNumber) {  
				return true;
			};
});



