jQuery(document).ready(function ($) {

    $resources = $("#resources");

    var numOfItems = $resources.find(".item").length;

    if(numOfItems > 1){

        $resources.owlCarousel({
                items : numOfItems,
                margin:40,
                mouseDrag: true,
                responsiveClass:true,
                responsive:{
                    0:{items: 1},
                    600:{items: 2},
                    1000:{items: 3}
                },
                nav:true,
                loop:true,
                smartSpeed : 600
        });

    }

});
