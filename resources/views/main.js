'use strict';

$(function() {
	//config
	var width = 720;
	var animationspeed = 1000;
	var pause = 3000;
	var currentSlide = 1;
	
	//cache DOM
	var $slider = $('#slider);
	var sliderContainer = $slider.find('.slides');
	var $slides = $slideContainer.find('.slide');
	
	var interval;
	
	function startSlider(){
		$sliderContainer.animate({'margin-left': '-='+width}, animationSpeed, function
			currentSlide++;
			if (currentSlide === $slides.length) {
				currentSlide = 1;
				$slideContainer.css('margin-left', 0);
			}
		});
	}, pause);
}

function stopSlider() {
	clearInterval(interval);
}

$slider.on('mouseenter', stopSlider).on('mouseleave', startslider);

});