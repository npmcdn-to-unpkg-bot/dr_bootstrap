jQuery(function($) {

  $('#caasContent .serviceWrap').first().addClass('show');
  $('#caasNav .caasNavItem').eq(1).addClass('active');



  // $("#helpYourBusiness .slideIn").each( function() {
  //   $(this).affix({
  //     offset: $(this).offset().top - $(window).height() + 220
  //   });
  // });
  $(window).on('scroll', function(){

    $("#helpYourBusiness .slideIn").each( function() {
      if ( $(this).offset().top + 220 <= $(window).scrollTop() + $(window).height() ) {
        $(this).addClass('now');
      }
      
    });

  });

  
  $('#marketingServicesNav').on('click', function() {
    $('#caasContent').find('.show').removeClass('show');
    $('#caasContent').find('#marketingServices').addClass('show');
    $('#caasNav').find('.active').removeClass('active');
    $(this).addClass('active');
  });
  $('#proServicesNav').on('click', function() {
    $('#caasContent').find('.show').removeClass('show');
    $('#caasContent').find('#proServices').addClass('show');
    $('#caasNav').find('.active').removeClass('active');
    $(this).addClass('active');
  });
  $('#commerceXpNav').on('click', function() {
    $('#caasContent').find('.show').removeClass('show');
    $('#caasContent').find('#commerceXp').addClass('show');
    $('#caasNav').find('.active').removeClass('active');
    $(this).addClass('active');
  });
  $('#commerceMgmtNav').on('click', function() {
    $('#caasContent').find('.show').removeClass('show');
    $('#caasContent').find('#commerceMgmt').addClass('show');
    $('#caasNav').find('.active').removeClass('active');
    $(this).addClass('active');
  });
  $('#orderMgmtNav').on('click', function() {
    $('#caasContent').find('.show').removeClass('show');
    $('#caasContent').find('#orderMgmt').addClass('show');
    $('#caasNav').find('.active').removeClass('active');
    $(this).addClass('active');
  });
  $('#paymentsNav').on('click', function() {
    $('#caasContent').find('.show').removeClass('show');
    $('#caasContent').find('#payments').addClass('show');
    $('#caasNav').find('.active').removeClass('active');
    $(this).addClass('active');
  });
  $('#commerceBINav').on('click', function() {
    $('#caasContent').find('.show').removeClass('show');
    $('#caasContent').find('#commerceBI').addClass('show');
    $('#caasNav').find('.active').removeClass('active');
    $(this).addClass('active');
  });


  if ( $(window).width() > 800 ) {

    // service window content vertically aligned
    $('.serviceWrap .service').on('click', function() {
      if ( !$(this).hasClass('active') ) { //stop it from recalcualting everytime
        var $serviceWindow = $(this).parent().find('.serviceWindow');
        var $active = $(this).parent().find('.active');
        var blurb = $(this).find('.blurb').html();
        $serviceWindow.addClass('on');
        //loop 5 times to make sure text adjusts properly
        for (var i = 0; i < 5; i++) {
          $serviceWindow.find('.blurbWrapper').html(blurb).promise().done(function(){
            var $blubWrap = $serviceWindow.find('.blurbWrapper');
            var marginTop = (482 - $blubWrap.height()) / 2;
            if ( $blubWrap.height() < 482 ) {
              $serviceWindow.find('.blurbWrapper').css('margin-top',marginTop+'px');
            } else {
              $serviceWindow.find('.blurbWrapper').css('margin-top','0px');
            }
          });
        }
        $active.removeClass('active');
        $(this).addClass('active');
      }
    });


    // Fixed caas nav
    var heightStart = $('#caas').offset().top;
    var vpHeight = $(window).height();
    $(window).on('resize', function(){ vpHeight = $(window).height(); });
    $(window).on('scroll', function(){
      var scrollTop = $(window).scrollTop();
      var caasHeight = $('#caas').height();
      if ( scrollTop <= heightStart || scrollTop >= ( heightStart + caasHeight - vpHeight ) ) {
        $('#caasNav').removeClass('fixed');
      } else {
        $('#caasNav').addClass('fixed');
      }
    });

    // equal height nav items
    var cassNavHeight = $('#caasNav').height();
    $('#caasNav .caasNavItem').css('min-height', cassNavHeight+'px');  


  } else {

    $('#caasContent .service').on('click', function() {
      $(this).addClass('active');
      $('html, body').animate({
          scrollTop: $(this).parent('.services').offset().top
      }, 100);
      if ( $('#caasOverlay').length < 1 ) {
        $('#outer_wrapper').append('<div id="caasOverlay"></div>');
      }
    });

    $(document).on('click', '#caasContent .active .close', function() {
      $('#caasContent').find('.active').removeClass('active');
      $('#caasOverlay').remove();
    });

    $(document).on('click', '#caasOverlay', function() {
      $('#caasContent').find('.active').removeClass('active');
      $(this).remove();
    });

  }


  //Mobile caas nav
  $(document).on('click', '#otherServices', function() {
    $('#caasNav').toggleClass('expanded');
    var navScroll = $('#caasNav').offset().top - 75;
    $('html,body').animate({
      scrollTop: navScroll
    }, 500);
  });
  $('.caasNavItem').not('#otherServices').on('click', function() {
    $('#caasNav').removeClass('expanded');
  });

}, jQuery);