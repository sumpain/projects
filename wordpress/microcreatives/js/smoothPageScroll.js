/* http://blog.bassta.bg/2013/05/smooth-page-scrolling-with-tweenmax/ */

jQuery(function(){
	
	var $window = jQuery(window);		//Window object
	
	var scrollTime = 0.5;			//Scroll time
	var scrollDistance = 170;		//Distance. Use smaller value for shorter scroll and greater value for longer scroll
	
	var isChrome = /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor);
    
    if (isChrome){
		scrollTime = 1;
		scrollDistance = 170;    	
    }

	$window.on("mousewheel DOMMouseScroll", function(event){
		event.preventDefault();	
										
		var delta = event.originalEvent.wheelDelta/120 || -event.originalEvent.detail/3;
		var scrollTop = $window.scrollTop();
		var finalScroll = scrollTop - parseInt(delta*scrollDistance);
			
		TweenMax.to($window, scrollTime, {
			scrollTo : { y: finalScroll, autoKill:true },
				ease: Power1.easeOut,	//For more easing functions see http://api.greensock.com/js/com/greensock/easing/package-detail.html
				autoKill: true,
				overwrite: 5							
			});
					
	});
});