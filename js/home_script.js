
jQuery(document).ready(function( $ ) {



// function resizeHero(){ 
// 	var windowWidth = $(window).width();
// 	if(windowWidth >= 700){
// 		var height = $("#firstImage").height();
// 	}else{
// 		var height = $("#firstMobileImage").height();
// 	}

// 	$(".hero").height(height);
// 	$(".hero").find(".owl-stage").height(height);
// }


	var timer;
	$(window).bind('resize', function(){
	   timer && clearTimeout(timer);
	   timer = setTimeout(resizeHero, 500);
	});


	var hero = $(".flexslider");
  	hero.owlCarousel({
		autoplayTimeout:9000,
		autoplay:true,
		loop:true,
		callbacks: true,
		navigation: false,
		items:1,
  	});


	

	var owl = $("#owl-demo");
  	owl.owlCarousel({
		autoplayTimeout:3000, //Set AutoPlay to 3 seconds
		autoplay:true,
		items : 5,
		responsiveClass:true,
	    responsive:{
	        0:{
	            items:1
	        },
	        350:{
	            items:2
	        },
	        550:{
	            items:3
	        },
	        800:{
	            items:5
	        }
	    },
		pagination:false,
		loop:true,
		lazyLoad: true,
		callbacks: true,
	});

	owl.trigger('autoplay.stop.owl');

	var ctaTab = $(".call-to-action-tab");
	$(window).scroll(function(){

		if($(window).scrollTop() >= 400){
			ctaTab.show();
		}else{
			if(!ctaTab.hasClass("expanded")){ 
				ctaTab.hide();
			}
		}
	   
	    if($(window).scrollTop() >= 783){
			  owl.trigger('autoplay.play.owl',[3000]);
		}
	});




})

