
     	jQuery(document).ready(function($){

     		 mapheight = $("#worldMap").height()+150;
     		resizeHeight(mapheight);

     	var region = false;

	function getCountryInfo(countryId){
		var xmlhttp;
		if (window.XMLHttpRequest){
			// code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp=new XMLHttpRequest();
		}else{
			// code for IE6, IE5
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function(){
		  if (xmlhttp.readyState==4 && xmlhttp.status==200){
		    $(".overlay").html(xmlhttp.responseText);

		    var cardWrapperHeight = $(".overlay").find(".card-wrapper").children(".grid6").height();
		    
		    $(".overlay").find(".country-img").height(cardWrapperHeight - 150);
		    $(".country-img svg").attr('class','zoom');
		    $(".map-wrapper").css('padding', '999px');

		  }
		}
		xmlhttp.open("GET","/wp-content/themes/digital-river-translated/country_ajax.php?id="+countryId,true);
		
		xmlhttp.send();
	}


		$(document).on("click", "#reset", goToOverview);
		$(document).on("click",".main-crumb",goToOverview);

		function goToOverview(){


			$(".drwp-wrapper").attr("class","drwp-wrapper overview");
			$(".crumb").remove();
			$(".seperator").remove();
			$(".country-wrapper").removeClass("hide");
			$(".world-wrapper").show();
			$(".region-wrapper").hide();
			$(".map-wrapper").show();
			$(".top-wrapper").removeClass("bgChange");
			$(".map-wrapper").css('padding', '0');
			 
			$(".top-wrapper").find(".heading").html("Select A Region");


			resizeHeight(mapheight);

     		$(".overlay").removeClass("active");
	     		setTimeout(function(){
     			$(".overlay").html("");
     		},500);
			region = false;
		}

     	$(document).on("click",".crumb.region",function(){
 				
 				$(".crumb.country").remove();
 				$(".seperator.country").remove();
	     		$(".overlay").removeClass("active");
				$(".country-wrapper").removeClass("hide");
				$(".region-wrapper[data-region='"+$(this).data("id")+"']").show();
				$(".map-wrapper").show();
				$(".top-wrapper").find(".heading").html($(this).html());
				$(".top-wrapper").removeClass("bgChange");
				$(".map-wrapper").css('padding', '0');

				resizeHeight(mapheight);

	     		setTimeout(function(){
	     			$(".overlay").html("");
	     		},500);
	     		$(".drwp-wrapper").removeClass("countryView");

     	});

     	$(".country").on("click",function(){
     		if(region == true){
	     		var selectedCountry = $(this).data("name");
	     		var countryId = $(this).data("countryid");
     			countryClick(countryId, selectedCountry);
     		}
     	});

     	var $naCountries = $("#mexico, #canada, #usa, #ror");
     	var $euroCountries = $("#ror_4_, #malta, #slovakia, #slovania, #hungary, #romania, #lithuania, #latvia, #estonia, #czechRepublic, #austria, #liechtenstien, #greece, #italy, #poland, #luxembourg, #germany, #denmark, #netherlands, #belgium, #ireland, #spain, #france, #uk, #finland, #sweden, #norway");
     	var $asiaCountries = $("#ror_3_, #india");
     	var $oceaniaCountries = $("#ror_2_, #austrailia");
     	var $saCountries = $("#ror_1_, #brazil");
     	$euroCountries.add($naCountries).add($asiaCountries).add($saCountries).add($oceaniaCountries).add($euroCountries).on("click",function(){
     		if(region == true){
	     		var selectedCountry = $(this).data("name");
	     		var countryId = $(this).data("countryid");
     			 countryClick(countryId, selectedCountry);
     		}
     	});





     		function countryClick(countryId, selectedCountry, noCrumb){

     			if(noCrumb == undefined){
	     			$("<span class='seperator country'>&gt;</span><div class='crumb country' >"+selectedCountry+"</div>").insertBefore($(".breadcrumb").find(".clear"));
	     			$(".heading").text(selectedCountry);
	     			$(".heading").text(selectedCountry);
	     		}
	     		$(".drwp-wrapper").addClass("countryView");


	     		getCountryInfo(countryId);
	     
	     		$(".overlay").addClass("active");
	     		
	     		$('.country-wrapper').addClass('hide');
	     		$('.top-wrapper').addClass('bgChange');

	     		$(".region-wrapper").hide();
	     		$(".map-wrapper").hide();
     		
	     		setTimeout(function(){
	     			resizeHeight($("#mapOverlay").height()+100);
	     		},500);

     			sendtoAn($(".crumb.region").data("regionid"), selectedCountry);

     		}


     		$("#world .country").hover(function(){
	   			if(region == true){
     				var countryId = $(this).data("countryid");
				   $(".region-wrapper .country[data-countryId='"+countryId+"'] span").css({color:"#81b315" });
				}
			},function(){
			   if(region == true){
     				var countryId = $(this).data("countryid");
			   		$(".region-wrapper .country[data-countryId='"+countryId+"'] span").css({color:"#343436" });
				}
			});

			$(".region-wrapper .country").hover(function(){
	   			if(region == true){
     				var countryId = $(this).data("countryid");
				   $("#world .country[data-countryid='"+countryId+"'] .st0").css({fill:"#81b315" });
				}
			},function(){
			   if(region == true){
     				var countryId = $(this).data("countryid");
			   		$("#world .country[data-countryid='"+countryId+"'] .st0").css({fill:"#FFFFFF" });
				}
			});



  

  




     	var $regions = $(".drwp-wrapper #asia, .drwp-wrapper #northAmerica, .drwp-wrapper #southAmerica, .drwp-wrapper #africa, .drwp-wrapper #europe, .drwp-wrapper #apac");
     	$regions.on("click",function(){
     		if(region == false){
     			var regionId = $(this).attr("id");
				zoomToRegion(regionId);
				region = true;
			}
     	});

     	
     	$(".region").on("click",function(){
     		if(region == false){
     			var regionId = $(this).data("region");
				zoomToRegion(regionId);
				region = true;
			}
     	});

     	function zoomToRegion(regionId){

     		$(".drwp-wrapper").removeClass("overview");
     		$(".drwp-wrapper").addClass("region");
     		$(".drwp-wrapper").addClass(regionId);
     		if(regionId == "northAmerica"){
     			var selectedCountry = "North America";
     		}else if(regionId == "asia"){
     			var selectedCountry = "Asia";
     		}else if(regionId == "europe"){
     			var selectedCountry = "Europe";
     		}else if(regionId == "africa"){
     			var selectedCountry = "Africa";
				countryClick("Africa", selectedCountry);
     		}else if(regionId == "southAmerica"){
     			var selectedCountry = "South America";
     		}else if(regionId == "apac"){
     			var selectedCountry = "Austria and Oceania";
     		}


			resizeHeight(mapheight);


			$(".top-wrapper").find(".heading").html(selectedCountry);
     		$(".country-list-wrapper").children(".heading").html(selectedCountry);
     		$(".world-wrapper").hide();
     		$(".region-wrapper[data-region='"+regionId+"']").show();

     		$("<span class='seperator'>&gt;</span><div class='crumb region' data-id='"+regionId+"' data-regionid='"+selectedCountry+"' >"+selectedCountry+"</div>").insertAfter($(".main-crumb"));
     		$(".breadcrumb").css('visibility','visible');
     		$(".resetContainer").css('visibility','visible');

     		sendtoAn("overview", selectedCountry);

     		
     	}


     	function sendtoAn(category, action){
     		if(utag){
	     		x = {};
				x.event_category = category.toLowerCase();
				x.event_action = action.toLowerCase();
				x.event_label = "click";
				utag.data.is_link = true;
				utag.link(x);
			}
     	}

     	function resizeHeight(newHeight){
     		$("#interactivemap").height(newHeight);
     	}

     });