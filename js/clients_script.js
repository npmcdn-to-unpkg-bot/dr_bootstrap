	jQuery(document).ready(function($){

		var next = true;
		var itemClick = false;

		$(".embed-container iframe, .embed-container object, .embed-container embed").css("height","101%");

		var currentIndex;
		var clickedIndex;
		var clickedCurrent;
		var tallest = 0;
		$(".client").not(".client_quote_box").each(function(){
			var $thisHeight = $(this).height();
			if($thisHeight > tallest){
				tallest = $thisHeight;
			}
		})
		tallest += 30;
		$(".client").height(tallest);

	

		$('.flexslider').flexslider({
	        animation: 'slide',
	        animationSpeed: 600,
			after: function(slider){
				var slider1 = slider.data('flexslider');
				slider1.resize();
			},
			controlNav: false,
			directionNav: true,
			prevText: "Previous",
			nextText: "Next"
	    });


},jQuery);
	
