

jQuery(document).ready(function ($) {

    $(".hamburger").on("click",function(){
        $("#nav-wrapper").toggle();
        $(this).toggleClass("active");
    });

    $(".menu-expand").on("click",function(){
        $(this).find(".fa").toggle();
        $(this).siblings(".sub-menu").toggleClass("active");
    });



    /*
    **  Start Search Functionality
    */
    $("#search_form").on("click", function(){
        $(this).toggleClass("active");
        $("#top-nav").toggleClass("search_active");

        $(this).find(".search_box").focus();
        $("#search_form").off();
    });

    /*
    **  End Search Functionality
    */


    var init_clients_slider = function($clientsSlider){

        $clientsSlider.owlCarousel({
            autoplayTimeout:3000,
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

    }

    $(".clients-slider").each(function(){
        init_clients_slider($(this));
    });




              var $grid;
              jQuery(document).ready(function($){
                $grid = $('.interactive-grid .row');
                $grid.packery({
                  itemSelector: '.interact',
                  gutter: 0
              });

              $(document).on("click", ".interact", function(){
                  var $this = $(this);

                  var $this_grid = $this.parents(".interactive-grid");


                  $this.parents(".interactive-grid-wrapper").addClass("active");

                  if($this_grid.find(".grid-item-wrapper.active").length > 0){
                      close_grid_item($this_grid.find(".grid-item-wrapper.active"));
                      $this.parents(".interactive-grid-wrapper").addClass("active");
                  }

                  $(".grid-item-wrapper").not(this).each(function(){
                      if($(this).hasClass("active")){
                          $(this).removeClass("active");
                      }
                  });
                  $this.clone().insertAfter($this).addClass("placeholder").find(".grid-item").empty();
                  
                  $this.addClass("active");
                  $this.toggleClass("interact");

                  $grid.packery('reloadItems');
              });

              var close_grid_item = function($this_grid_item){

                  $this_grid_item.parents(".interactive-grid-wrapper").removeClass("active");

                  var left = $(".interactive-grid").find(".placeholder").css("left");
                  var top = $(".interactive-grid").find(".placeholder").css("top");

                  $this_grid_item.css({left:left, top:top});
                  $this_grid_item.removeClass("active");
                  $this_grid_item.addClass("interact");

                  $("iframe.video").each(function(){
                    $("#"+$(this).attr("id")).vimeo("pause");
                  });

                  $(".interactive-grid").find(".placeholder").remove();
                  $grid.packery('reloadItems');

              }
              $(document).on("click",".interactive-grid .active .close", function(){
                  close_grid_item($(this).parents(".grid-item-wrapper"));
              });

              var resizeTimer;
              $(window).on('resize', function(e) {

                clearTimeout(resizeTimer);
                resizeTimer = setTimeout(function() {
                  $grid.packery("layout");
                }, 250);

              });

            });




	var map;
	var marker;
    $(".dropdown-item").children('a').addClass('dropdown-button');
    $(".menu-item-language").children('a').addClass('dropdown-button');

    function updateMap() {
        var mapOptions = {zoom:13,center: new google.maps.LatLng(44.900322, -93.410808),mapTypeId: google.maps.MapTypeId.ROADMAP,panControl: false,zoomControl: false, mapTypeControl: false,scaleControl: false,streetViewControl: false,scrollwheel: false}

        map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
        var styles = [{'featureType': 'all','elementType': 'all',stylers: [{saturation: -100}]}]
        map.setOptions({styles: styles});

        var markerCoordinates1 =new google.maps.LatLng(44.900322,  -93.410808);
        marker = new google.maps.Marker({position: markerCoordinates1, map: map, icon: 'http://drdev01.staging.wpengine.com/wp-content/themes/digital-river/img/map-marker.png'});
    }
    google.maps.event.addDomListener(window, 'load', updateMap);


    function getLocation(url) {
        a = document.createElement('a');

        a.href =  url;
        var path = a.pathname;
        return path;
    }

    var path = window.location.pathname;
    $("a").mousedown(function() {
        var href = getLocation($(this).attr("href"));
    // disable ga when GA not active
    //    ga('send', 'event', path, href);
    }); 

    // Show login menu
    var timer,
        util_open = false,
        language_open = false;

    $('.header_navigation .dropdown-item > a').on("click", function(e) {
        e.preventDefault();
    })


    var dropped = false;
    $("body").click(function(event) {
        var string = event.target.className;
        if(dropped == true && string != "dropdown-button" && string != "dropdown-button expanded" ){
            $(".dropdown-item").children('a').removeClass('expanded');
            $(".menu-item-language").children('a').removeClass('expanded');
            $(".dropdown-item").children('.sub-menu').stop().slideUp(100);
            $(".menu-item-language").children('.sub-menu').stop().slideUp(100);
            dropped = false;
        }
    });



    $('.top-nav .dropdown-item, .top-nav .menu-item-language').on("click",function(e) {
        var $this = $(this); 

        if(e.target.nodeName != "A" || e.target.className == "dropdown-button"){
            e.preventDefault();
        }

        if($this.hasClass("dropdown-item")){
            $(".menu-item-language").children('a').removeClass('expanded');
            $(".menu-item-language").children('.sub-menu').stop().slideUp(100);
              dropped = false;
        
        }else if($this.hasClass("menu-item-language")){
            $(".dropdown-item").children('a').removeClass('expanded');
            $(".dropdown-item").children('.sub-menu').stop().slideUp(100);
            dropped = false;
        }

        if( ! $this.children('a').hasClass('expanded')){
            $this.children('a').addClass('expanded');
            $this.children('.sub-menu').addClass('active');
            $this.children('.sub-menu').stop().slideDown(100);
             dropped = true;

        }else{
            dropped = false;
            $this.children('a').removeClass('expanded');
            $this.children('.sub-menu').stop().slideUp(100);
        }
    })

    // Clears the timer
    $('.header_navigation .dropdown-item, .header_navigation .sub-menu').mouseenter(function() {
        clearTimeout(timer);
    });



$(window).on("scroll",function(){
	var scrollTop = $(window).scrollTop();
	if(scrollTop < 300){
		var newOpacity = 1 - (scrollTop/300);
		jQuery(document).find(".masthead_background").css({opacity:newOpacity});
	} 	
})


	//expand and contract footer nav

$('.link-section .expand-contract').on("click", function () {
	//only execute on mobile
	if($(window).width() <= 425){
		var closed = $(this).hasClass("arrow-closed");

		if(closed == true){
			$($(this).siblings(".menu-wrapper")).stop().slideDown(100);
			$(this).removeClass("arrow-closed");
			$(this).addClass("arrow-opened");

		}else if(closed == false){
			$($(this).siblings(".menu-wrapper")).stop().slideUp(100);
			$(this).removeClass("arrow-opened");
			$(this).addClass("arrow-closed");

		}
	}

});


$(".link-section").on("click", function(){
	//only execute on mobile
	if($(window).width() <= 425){
			var $expandContract = $(this).children(".expand-contract");
			var closed = $expandContract.hasClass("arrow-closed");

			if(closed == true){
				$($expandContract.siblings(".menu-wrapper")).stop().slideDown(100);
				$expandContract.removeClass("arrow-closed");
				$expandContract.addClass("arrow-opened");

			}else if(closed == false){
				$($expandContract.siblings(".menu-wrapper")).stop().slideUp(100);
				$expandContract.removeClass("arrow-opened");
				$expandContract.addClass("arrow-closed");
			}

	}

		}).children("ul, li").on("click",function(event){
				 event.stopPropagation();
		})

		$('.rail_tabbed_content').sidebar_tabs();


    var lastScrollTop = 0;


	$(".menu_title img").on("click",function(){
		 window.location = "http://www.digitalriver.com";
	})

	causeRepaintsOn = $(".header, .link");
    // Blog middle column resize
    $(window).resize(function() {

		if($(window).width() < 425){
				// the map in the footer gets off center for some reason when changing the width of the page
				// recenter the map
			if(typeof map !== 'undefined' && typeof marker !== 'undefined'){
				if(map.getCenter() != marker.getPosition()){
						var mapCenter = marker.getPosition();
						map.setCenter(mapCenter);
				}
			}
		}

		causeRepaintsOn.css("z-index", 1);

        var height_array = new Array();
        height_array[0] = $('#template_k .left_column, #template_b.blog .left_column').height();
        height_array[1] = $('#template_k .right_column, #template_b.blog .right_column').height();
        // $('#template_k .middle_column, #template_b.blog .middle_column').height(Math.max.apply(Math, height_array) + 60);
        $('#template_k .middle_column, #template_b.blog .middle_column').css('min-height', Math.max.apply(Math, height_array) + 60);




    });


    $(window).trigger('resize');





});
