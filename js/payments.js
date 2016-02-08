	
jQuery(document).ready(function($){

    initWhySlider = false;

	var why = $("#why-slider");
  	why.owlCarousel({
			pagination:false,
			loop:true,
			items:3,
            responsive:{
                0:{
                    items:1
                },
                1000:{
                    items:3
                }
            }
	});
    why.trigger('prev.owl.carousel');


    why.on("changed.owl.carousel", function(event){
                            
    	index = event.item.index+1;
        if(initWhySlider){
            $(event.target).find(".item").removeClass("active");
            $(event.target).find(".item").eq(index).addClass("active");
        }else{
            $(event.target).find(".item").removeClass("hold-active");
            $(event.target).find(".item").eq(index).addClass("hold-active");
        }

        $(".seperator").addClass("inactive");

        setTimeout(function(){
	        $(".seperator").removeClass("inactive");
        },250);

    });


    $(".left-hitbox").on("click",function(){
    	 why.trigger('prev.owl.carousel');
    });


    $(".right-hitbox").on("click",function(){
    	 why.trigger('next.owl.carousel');
    });



    var clientsSlider = $("#clientsSlider");
    clientsSlider.owlCarousel({
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
            loop:true
    });

    clientsSlider.trigger('autoplay.stop.owl');


    $(document).on("scroll", function(){
        var docPos = $(document).scrollTop();
        var pos = (docPos*.25) + (-450);
        $(".gray-map-bg").css("background-position", "0px "+pos+"px");

        if(initWhySlider == false){
            if((why.scrollTop() + 200) < docPos){
               initWhySlider = true;
               $(".hold-active.item").addClass("active");    
            }
        }
    });

});