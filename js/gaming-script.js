
    jQuery(document).ready(function($){

    var numOfImages = 4;
    var count = 0;

var animateIn = false;
var moduleTop = $("#module-wrapper").offset().top - 500;

$(".CTAPanel-Scale").addClass("fadeInScale");
$(".CTAPanel-Start").addClass("fadeInStart");
$(".CTAPanel-Dominate").addClass("fadeInDominate");

var checkScroll = function(){
    var docPos = $(document).scrollTop();
    if(animateIn == false){

        if(docPos >= moduleTop){
            setFlattenSection();
            setTimeout(function(){
                $("#level1").addClass("active");
                $("#level1").find(".description").slideDown();
                $("#interactive-wrapper").addClass("first");        
            },500);
            animateIn = true;

        }
    }  
}

        checkScroll();


var setFlattenSection = function(){

    for(var i = 1; i < parents; i++){
        flattenSection("med", i);
    }

    for(var i = 1; i < largeParents-1; i++){
        flattenSection("large", i);
    }
}

var flattenSection = function(buildingSize, buildingId){
    console.log(buildingId);
    if(buildingSize == "med"){
        var $thisBuilding = $(".img-wrapper2[data-building='"+buildingId+"']");
    }else{
        var $thisBuilding = $(".img-wrapper3[data-building='"+buildingId+"']");
    }
    
    var top = $thisBuilding[0].style.top;
    var height = $thisBuilding[0].style.height;

    var newTop = parseFloat(height) + parseFloat(top);

    $thisBuilding.addClass("tmpHide");
    $("#interactive-wrapper").removeClass("tmpShow");

    $thisBuilding.animate({top:newTop+"%", height:"0%"},{duration: 1000, queue: false});

    setTimeout(function(){
        $thisBuilding.removeClass("tmpHide");
        $thisBuilding.css("top", (parseFloat(top)-1)+"%");
        $thisBuilding.css("height", height);
    }, 1500);
}

    var c = document.getElementById("canvas");
    c.width = $(window).width();
    c.height = c.width * (5.75/16);
    var ctx = c.getContext("2d");

    var headerOverlay = document.getElementById("headerOverlay");

    var heroImgLoaded = function(){
        count++;

        if(count == numOfImages){
            var mouseInfo = {offsetX:$(window).width()/2,offsetY:12};
            trackMouse(mouseInfo);
        }
    }

    var img = new Image();
    img.src = "http://digitalriver.com/wp-content/themes/digital-river-translated/img/gaming/img/gamer3.png";
    img.addEventListener("load", heroImgLoaded);

    var img2 = new Image();
    img2.src = "http://digitalriver.com/wp-content/themes/digital-river-translated/img/gaming/img/computers.png";
    img2.addEventListener("load", heroImgLoaded);

    var img3 = new Image();
    img3.src = "http://digitalriver.com/wp-content/themes/digital-river-translated/img/gaming/img/buildings1.png";
    img3.addEventListener("load", heroImgLoaded);

    var img4 = new Image();
    img4.src = "http://digitalriver.com/wp-content/themes/digital-river-translated/img/gaming/img/background.png";
    img4.addEventListener("load", heroImgLoaded);


    var c = document.getElementById("canvas");
    c.width = $(window).width();
    c.height = c.width * (5.75/16);
    var ctx = c.getContext("2d");

    var headerOverlay = document.getElementById("headerOverlay");



    function create(num, depth){
        var calcNum = ((-4.5/5)*num)+(c.width/1.75);
        return calcNum * depth.toExponential();
    }

    function createY(num, depth){
        var calcNum = ((-4.5/5)*num)+(c.width/5);
        return calcNum * depth.toExponential();
    }


    var windowWidth = $(window).width();

    $(window).resize(function(){
        windowWidth = $(window).width();
    });

    var trackMouse = function(e){

        if(windowWidth >= 1000){
            ctx.clearRect(0, 0, c.width, c.height);

            var x = e.offsetX - (c.width)*.3;
            var x2 = e.offsetX + (c.width)*.025;
            var x3 = e.offsetX + 1200;

            imgX = create(x, .2);
            img2X = create(x2, .075);
            img3X = create(x3, .01);

            var y = e.offsetY + (c.height) - (1200);
            var y2 = e.offsetY - (c.height) - (1200);
            var y3 = e.offsetY - (c.height) + (1400);

            var y = createY(y, .2);
            var y2 = createY(y2, .075);
            var y3 = createY(y3, .005);

            ctx.drawImage(img4, 0, 0, img4.width, img4.height, 0, 0, c.width , c.height);
            ctx.drawImage(img3, 0, 0, c.width, c.height, img3X-25, y3+0, c.width, c.height);
            ctx.drawImage(img2, 0, 0, img2.width, img2.height, img2X-15, y2, c.width , c.height);
            ctx.drawImage(img, 0, 0, img.width, img.height, imgX, y, c.width*.8 , c.height*1);
        }
    }

    var resetCanvas = function(e){
        var mouseInfo = {offsetX:$(window).width()/2,offsetY:12};
        trackMouse(mouseInfo);
    }

    c.addEventListener("mousemove", trackMouse, false);
    c.addEventListener("mouseleave", resetCanvas, false);




var isOdd = function(x) { return x & 1; };

var renderSlices = function(size, numOfSlices, width, height, imgWrapperEle){
    var imgElement = document.createElement("img");
    imgElement.src = "http://digitalriver.com/wp-content/themes/digital-river-translated/img/gaming/img/buildings/"+size+"_"+i+"_grid.png";
    imgElement.style.zIndex = "3";
    imgElement.style.position = "relative";

    var newHeight = height+height*.25;

    imgWrapperEle.appendChild(imgElement);

    for(var j = 0; j < numOfSlices; j++){

        var slice = document.createElement("div");
        var top = (((newHeight/numOfSlices) * j))+"px";
        var left = medBuilding[i].left+"px";
       
        slice.style.top = top;
        var top = (((newHeight/numOfSlices) * j)-3)+"px";
        slice.style.height = (newHeight/numOfSlices)+"px";
        slice.style.backgroundImage = "url('http://digitalriver.com/wp-content/themes/digital-river-translated/img/gaming/img/buildings/"+size+"_"+i+".png')";

        slice.style.backgroundPosition = "0px -"+top;
        slice.className = "slice slice"+j;

        imgWrapperEle.appendChild(slice);
    }

    // document.getElementById("interactive-wrapper").appendChild(imgWrapperEle);
}


var parents = 12;

var medBuilding = Array(
    {top:400, left:280, height:124},
    {top:500, left:280, height:161}, //done
    {top:365, left:255, height:102}, //done
    {top:315, left:325, height:124}, //done
    {top:445, left:395, height:164}, //done
    {top:365, left:490, height:103},//done
    {top:440, left:195, height:125, zIndex:1}, //done
    {top:365, left:640, height:164}, //done
    {top:400, left:80, height:133}, //done
    {top:365, left:100, height:103, zIndex:1}, //done
    {top:345, left:180, height:103},
    {top:355, left:325, height:143}

);

var wrapperWidth = 1300;
var wrapperHeight = 682;

for(var i = 1; i < parents; i++){
   
    var offsetTop = 300;

    var width = ((270/wrapperWidth)*100)+"%";
    var imgWrapperEle = document.createElement("div");
    
    imgWrapperEle.className = "img-wrapper2 building"+i;
    imgWrapperEle.style.top = parseFloat(((medBuilding[i].top / wrapperHeight)*100))+"%";
    imgWrapperEle.style.left = ((medBuilding[i].left / wrapperHeight)*100)+"%";
    imgWrapperEle.style.height = parseFloat(((medBuilding[i].height / wrapperHeight)*100))+"%";

    
    if(typeof medBuilding[i].zIndex != 'undefined'){
        imgWrapperEle.style.zIndex = medBuilding[i].zIndex;
    }else{
        imgWrapperEle.style.zIndex = 2;
    }

    imgWrapperEle.style.width = width;
    imgWrapperEle.dataset.building = i;

    document.getElementById("interactive-wrapper").appendChild(imgWrapperEle);

    var numOfSlices = 10;
    renderSlices("med", numOfSlices, width, medBuilding[i].height, imgWrapperEle);
}



var largeBuilding = Array(
    {top:100, left:280},
    {top:405, left:585, height:369, zIndex:5}, //done
    {top:265, left:795, height:448, zIndex:4}, //done
    {top:130, left:935, height:400, zIndex:5}, //
    {top:165, left:160, height:396, zIndex:0}, //done
    {top:310, left:260, height: 429}, //done
    {top:200, left:425, height: 429, zIndex:5},
    {top:170, left:650, height: 429}
);

var largeParents = 8;

for(var i = 1; i < largeParents; i++){

    var height = 540;
    var offsetTop = 300;
    var width = ((120/wrapperWidth)*100)+"%";
    var left = ((largeBuilding[i].left / wrapperWidth)*100)+"%";
    var buildingTop = parseFloat(((largeBuilding[i].top / wrapperHeight)*100))+"%";
    var numOfSlices = 20;

    var imgWrapperEle = document.createElement("div");
    imgWrapperEle.className = "img-wrapper3 building"+i;
    imgWrapperEle.style.top = buildingTop;
    imgWrapperEle.style.left = left;
    imgWrapperEle.style.height = parseFloat(((largeBuilding[i].height / wrapperHeight)*100))+"%";
    if(typeof largeBuilding[i].zIndex != 'undefined'){
        imgWrapperEle.style.zIndex = largeBuilding[i].zIndex;
    }else{
        imgWrapperEle.style.zIndex = 2;
    }

    imgWrapperEle.style.width = width;
    imgWrapperEle.dataset.building = i;
    document.getElementById("interactive-wrapper").appendChild(imgWrapperEle);

    renderSlices("large", numOfSlices, width, largeBuilding[i].height, imgWrapperEle);
}

var clear = document.createElement("div");
clear.className = "clear";
document.getElementById("interactive-wrapper").appendChild(clear);




var levelOneAnimate = function(){
    if(!$(this).parents(".level").hasClass("active")){

        $("#interactive-wrapper").removeClass("third");
        $("#interactive-wrapper").removeClass("second");
        $("#interactive-wrapper").addClass("first");

        $(".img-wrapper2").find(".slice").removeClass("active");
        $(".img-wrapper3").find(".slice").removeClass("active");

    }
}

var setAnimation = function(){
    if(!$(this).parents(".level").hasClass("active")){

        $("#interactive-wrapper").removeClass("third");
        $("#interactive-wrapper").removeClass("first");
        $("#interactive-wrapper").addClass("second");
        
        $(".img-wrapper3").find(".slice").removeClass("active");
        var buildings = document.getElementsByClassName("img-wrapper2");

        for(var i = 0; i < buildings.length; i++){
            buildings[i].className += " shake";
            runAnimation(buildings[i]);
        }

        setTimeout(function(){
            $(".img-wrapper2").removeClass("shake");
        },1000);

    }

}


var setAnimation1 = function(){

    if(!$(this).parents(".level").hasClass("active")){

        $("#interactive-wrapper").removeClass("second");
        $("#interactive-wrapper").removeClass("first");
        $("#interactive-wrapper").addClass("third");

        $(".img-wrapper2").find(".slice").removeClass("active");
        var buildings = document.getElementsByClassName("img-wrapper3");

        for(var i = 0; i < buildings.length; i++){
            buildings[i].className += " shake";
            runAnimation(buildings[i]);
        }

        setTimeout(function(){
            $(".img-wrapper3").removeClass("shake");
        },1000);

    }
}

var runAnimation = function(building){
       setTimeout(function(){
            var slices = building.getElementsByClassName("slice");
            var count = slices.length - 1;
            for(var j = 1; j <= slices.length; j++){
                setTimeout(function(){
                    slices[count].className += " active";
                    count--;
                },(j*75));    
            }
        },(50)); 
}

var flattened = false;

var levelOneEnter = function(){
    $("#interactive-wrapper").addClass("hover1");
}

var levelOneLeave = function(){
    $("#interactive-wrapper").removeClass("hover1");
}

var mouseenterLevel3 = function(){
    $("#interactive-wrapper").addClass("hover3");
}

var mouseleaveLevel3 = function(){
    $("#interactive-wrapper").removeClass("hover3");
}

var mouseenterLevel2 = function(){
    $("#interactive-wrapper").addClass("hover2");
}

var mouseleaveLevel2 = function(){
    $("#interactive-wrapper").removeClass("hover2");
}

document.getElementById("expand1").addEventListener("click", levelOneAnimate);
document.getElementById("level1").addEventListener("mouseenter", levelOneEnter);
document.getElementById("level1").addEventListener("mouseleave", levelOneLeave);

document.getElementById("level2").addEventListener("mouseenter", mouseenterLevel2);
document.getElementById("level2").addEventListener("mouseleave", mouseleaveLevel2);
document.getElementById("expand2").addEventListener("click", setAnimation);

document.getElementById("level3").addEventListener("mouseenter", mouseenterLevel3);
document.getElementById("level3").addEventListener("mouseleave", mouseleaveLevel3);
document.getElementById("expand3").addEventListener("click", setAnimation1);


$(".level h3").on("click",function(){
    var $level = $(this).parents(".level");
    if(!$level.hasClass("active")){
        $(".level").find(".description").slideUp(200);
        $(".level").removeClass("active");
        $level.addClass("active");
        $level.find(".description").slideDown(200);
    }    
});

function getRandomArbitrary(min, max) {
  return Math.random() * (max - min) + min;
}

var isAnimated = false;
var showOverlay = function(){
    var $this = $(this);
    var $halfDiv = $this.find(".half-div");
    var $copyWrap = $this.find("p");

    if(isAnimated == false){
        $halfDiv.animate({width:"50%"},200,function(){
            $halfDiv.animate({height:"40px"},200,function(){
                $copyWrap.slideDown(200); 
            });
        });
        isAnimated = true;
    }else{
        $copyWrap.slideUp(200);  
        setTimeout(function(){
            $halfDiv.animate({height:"0px"},200,function(){
                $halfDiv.animate({width:"0%"},200);
            });
        },200);
        isAnimated = false;
    }
}


$(".overlay").on("click",{animated:isAnimated}, showOverlay);

    





    var openDot = function(number){
        var dontActivate = false;

        if(typeof number === "object"){
            var $this = $(this);
        }else{
            var $this = $(".dot[data-number='"+number+"']");
        }

        if($this.parent(".dot-wrapper").hasClass("active")){
            dontActivate = true;
        }
        
        $('.dot-wrapper').removeClass('active');
        if(dontActivate == false){
            $this.parent(".dot-wrapper").addClass('active');
        }
    }

    var highlightBullet = function(){
        var $this = $(this).find(".dot");
        var number = $this.data("number");
        $(".point[data-number='"+number+"']").addClass("hovered");
        openDot(number);
    }

    var unhighlightBullet = function(){
        var $this = $(this).find(".dot");
        var number = $this.data("number");
        $(".point[data-number='"+number+"']").removeClass("hovered");
        openDot(number);
    }
    $('.dot-wrapper').on('mouseenter', highlightBullet);
    $('.dot-wrapper').on('mouseleave', unhighlightBullet);


    var highlightDot = function(){
        var $this = $(this);
        var number = $this.data("number");
        $(".dot[data-number='"+number+"']").addClass("hovered");
        openDot(number);
    }

    var unhighlightDot = function(){
        var $this = $(this);
        var number = $this.data("number");
        $(".dot[data-number='"+number+"']").removeClass("hovered");
        openDot(number);
    }
    $(".point").on("mouseenter", highlightDot);
    $(".point").on("mouseleave", unhighlightDot);


    var $carousel = $('#testimonials .owl-carousel');
    if($carousel.find(".item").length > 1){
        $carousel.owlCarousel({
            items:1,
            autoplay:true,
            autoplayTimeout:3e3,
            autoplayHoverPause:true,
            nav:true
        });
    }else{
        $carousel.show();
    }

  // $('#partners .owl-carousel').owlCarousel({
  //   lazyLoad:true,
  //   loop:true,
  //   autoplay:true,
  //   margin:20,
  //   autoplayTimeout:2e3,
  //   autoplayHoverPause:true,
  //   responsive:{
  //       0:{
  //           items:2
  //       },
  //       480:{
  //           items:3
  //       },
  //       768:{
  //           items:4
  //       },
  //       970:{
  //           items:5
  //       }
  //   }
  // });






$(document).on("scroll", function(){
    checkScroll();
});


// MAIN MODULE //

$('button.panelbuttonStart').click(function () {
    if(!$(".svg-Cover-Position-Start").hasClass('moveCoverStart')){
        $(".svg-Cover-Position-Start").addClass('moveCoverStart');
        $(".module2").addClass('moveCoverStart');
        $(".module2-Second").addClass('moveCoverStart');

    }else{
        $(".svg-Cover-Position-Start").addClass('removeAnimation');

        setTimeout(function(){
            $(".svg-Cover-Position-Start").removeClass('moveCoverStart');
            $(".svg-Cover-Position-Start").removeClass('removeAnimation');

            $(".module2").removeClass('moveCoverStart');
            $(".module2-Second").removeClass('moveCoverStart');
        },600);
    }
});


$('button.panelbuttonScale').click(function () {
    if(!$(".svg-Cover-Position-Scale").hasClass('moveCoverScale')){
        $(".svg-Cover-Position-Scale").addClass('moveCoverScale');
        $(".module2").addClass('moveCoverScale');
        $(".module2-Second").addClass('moveCoverScale');
        $(".panelScale").addClass('movePanelScale');
        $(".svg-Cover-Second-Position-Scale").addClass('moveCoverScaleSecondary');
        $(".CTAPanel-Scale").addClass('moveCTAPanelScale');

    }else{
        $(".svg-Cover-Position-Scale").addClass('removeAnimation');
        $(".panelScale").addClass('removeAnimation');
        $(".svg-Cover-Second-Position-Scale").addClass('removeAnimation');
        $(".CTAPanel-Scale").addClass('removeAnimation');

        $(".panelScale").removeClass('movePanelScale');


        setTimeout(function(){
            $(".svg-Cover-Position-Scale").removeClass('removeAnimation');
            $(".panelScale").removeClass('removeAnimation');
            $(".svg-Cover-Second-Position-Scale").removeClass('removeAnimation');
            $(".CTAPanel-Scale").removeClass('removeAnimation');

            $(".svg-Cover-Position-Scale").removeClass('moveCoverScale');
            $(".panelScale").removeClass('movePanelScale');
            $(".svg-Cover-Second-Position-Scale").removeClass('moveCoverScaleSecondary');
            $(".CTAPanel-Scale").removeClass('moveCTAPanelScale');
            

            $(".module2").removeClass('moveCoverScale');
            $(".module2-Second").removeClass('moveCoverScale');

        },350);
    }
});


$('button.panelbuttonDominate').click(function () {
    if(!$(".svg-Cover-Position-Dominate").hasClass('moveCoverDominate')){
        $(".svg-Cover-Position-Dominate").addClass('moveCoverDominate');
        $(".module2").addClass('moveCoverDominate');
        $(".module2-Second").addClass('moveCoverDominate');

    }else{
        $(".svg-Cover-Position-Dominate").addClass('removeAnimation');

        setTimeout(function(){
            $(".svg-Cover-Position-Dominate").removeClass('moveCoverDominate');
            $(".svg-Cover-Position-Dominate").removeClass('removeAnimation');

            $(".module2").removeClass('moveCoverDominate');
            $(".module2-Second").removeClass('moveCoverDominate');
        },1500);
    }
});


},jQuery);