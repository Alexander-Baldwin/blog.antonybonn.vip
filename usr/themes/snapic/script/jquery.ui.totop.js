(function($){
	$.fn.UItoTop = function(options) {

 		var defaults = {
			text: '',
			min: 200,
			inDelay:600,
			outDelay:400,
  			containerID: 'toTop',
			scrollSpeed: 0, /*1200*/
			easingType: 'linear'
 		};

 		var settings = $.extend(defaults, options);
		var containerIDhash = '#' + settings.containerID;
		
		$('body').append('<a href="#" id="'+settings.containerID+'" title="'+settings.text+'">'+settings.text+'</a>');
		$(containerIDhash).hide().click(function(){
			if(settings.scrollSpeed == 0)
				$('html, body').attr("scrollTop", 0);
			else 
				$('html, body').animate({scrollTop:0}, settings.scrollSpeed, settings.easingType);
			return false;
		});
					
		$(window).scroll(function() {
			var sd = $(window).scrollTop();
			if(typeof document.body.style.maxHeight === "undefined") {
				$(containerIDhash).css({
					'position': 'absolute',
					'top': $(window).scrollTop() + $(window).height() - 50
				});
			}
			if ( sd > settings.min ) 
				$(containerIDhash).fadeIn(settings.inDelay);
			else 
				$(containerIDhash).fadeOut(settings.Outdelay);
		});

};
})(jQuery);