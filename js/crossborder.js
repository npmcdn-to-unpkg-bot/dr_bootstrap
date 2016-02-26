		(function() {
			[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
				new SelectFx(el);
			} );
		})();
   		
     	var industryData = [];
     	     


     	jQuery(document).ready(function($){

           $(".crossborder-wrapper").addClass("active");

     		var animated = false;
     		$(document).on("scroll",function(){
     			var top = $(window).scrollTop();
     			$(".animate.beforeAnimate").each(function(){
     				if(top >= ($(this).offset().top - ($(window).height() - 200)) ){
     					$(this).removeClass("beforeAnimate");
     				}
     			});
				if(top >= ($("#industrySection").offset().top - ($(window).height() - 450)) ){
					if(animated == false){
						animateGraph(0);
						animated = true;
					}
				}
     		});



     		$(".selector").on("click",function(){
				var categoryId = $(this).data("value");
				animateGraph(categoryId);
				$(".selector").removeClass("active");
				$(this).addClass("active");
			});

     		var prevCat = -1;
     		var first = true;
     		var firstChange = false;
     		$(".cs-select").on("click",function(){

     			var categoryId = $(".cs-options").find(".cs-selected").data("id");
     			if(first != true){
     			 	if( prevCat == categoryId || firstChange == true){
     					animateGraph(categoryId);
     					prevCat = categoryId;
     					firstChange = false;
 						first = true;
     				}


     			}else{
     				first = false;     	
     				firstChange = true;			
     			}
     		});

     		$(document).on({
     			
			    mouseenter: function () {
			    	var $overlay = $(".overlay");

			    	var barId = $(this).parent().data("barid");
			    	var value = $(this).data("value");
			    	var percentage = $(this).data("percentage");

			    	var categoryId = $(this).data("categoryid");
			    	
			    	if(percentage == false){
			    		var html = value;
			    	}else{
			    		var html = value + "%";
			    	}

     			$overlay.find("span.percentage").html(html);

			    	var $thisWidth = $(this).width();
			    	$overlay.addClass("active");
	    			var top = $(this).offset().top+27;
	     			var left = $(this).offset().left;
     				var color = $("div[data-barid='"+barId+"']").find(".bar").css("background-color");
					$overlay.find(".tab").css("border-right", "8px solid "+color );
	     			$overlay.css({left:left+(15+($thisWidth)), top:top-5, borderColor:color});

			    },
			    mouseleave: function () {
			    	var $overlay = $(".overlay");
	        		$overlay.removeClass("active");
			    }

			},".bar");


     		function animateGraph(selectedId){


     			var numOfBars = $(".icon").length;
     			var numOfCategories = 7;
		     	$(".icon").css({height:((100/numOfBars))+"%"});

		     	for(var i = 0; i < numOfBars; i++){
		     		console.log(i);
		 			if(rankings[selectedId]['industries'][0]['percentage'] == false){

			     		if(i == 0){
			 				var winning = rankings[selectedId]["industries"][i]["value"];
			 			}else if(parseFloat(winning) < parseFloat(rankings[selectedId]["industries"][i]["value"])){
			 				winning = rankings[selectedId]["industries"][i]["value"];
			 			}
		     			console.log(typeof winning);

		 			}
		 			var $thisBarWrapper = $(".bar-wrapper[data-barid='"+barArray[i]+"']");
		 			$thisBarWrapper.css({height:(100/numOfBars)+"%", paddingTop: ".5%", paddingBottom: ".5%"});
		 			$thisBarWrapper.html("");
     				$thisBarWrapper.append('<div style="left:0; width:0%" class="bar" data-value="" data-percentage="" data-categoryid="'+selectedId+'"></div>');

		     	}

     				if(rankings[selectedId]['industries'][0]['percentage'] == false){
     					$(".x-val-high").html(winning);
     					$(".x-val-medium-high").html(parseFloat((winning/3)*2).toFixed(1));
     					$(".x-val-medium-low").html(parseFloat(winning/3).toFixed(1));
     					$(".x-val-low").html("0");
     				}else{
     					$(".x-val-high").html("100%");
     					$(".x-val-medium-high").html("66.7%");
     					$(".x-val-medium-low").html("33.3%");
     					$(".x-val-low").html("0%");
     				}


	     			var count = 0;
	     		$(".bar-wrapper").each(function(){
	     			var barId = $(this).data("barid");	     			
	     			$(this).find(".bar").each(function(index, data){
	     				categoryId = $(this).data("categoryid");
                              var scoreVal = rankings[categoryId]["industries"][count]['value'];

     					if(rankings[selectedId]['industries'][0]['percentage'] == false){
     						barWidth = (scoreVal / winning) * 100;
     						$(this).attr("data-percentage","false");
     					}else{
     						$(this).attr("data-percentage","true");
                                   barWidth = scoreVal;
     					}


     					$(this).attr("data-value",scoreVal);
     					$(this).width((barWidth-5)+"%");

     					$(".score[data-barid='"+barArray[count]+"']").html(scoreVal);


	     				count++;
	     			}); 

	     		});
	   		  	
			}




   		  	});