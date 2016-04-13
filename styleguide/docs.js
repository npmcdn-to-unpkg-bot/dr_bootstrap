// Smooth Scrolling
$(function() {
  $('a[href*="#"]:not([href="#"]):not(.example a[href*="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 200);
        return false;
      }
    }
  });
});

// Sidebar affix
$('#dr-docs-sidebar').affix({
  offset: {
    top: $('#dr-docs-sidebar').offset().top - 20,
    bottom: function () {
      return (this.bottom = $('.footer').outerHeight(true) + 80)
    }
  }
});

// Sidenav Scrollspy
$('body').scrollspy({
	target: '#dr-docs-sidebar'
});

// Sidenav border fix
$(window).scroll(function() {
  setTimeout(function() {
    var $activeParent = $('#dr-docs-sidebar .dr-docs-sidenav .active');
    if ($activeParent.find('.nav li.active').length > 0) {
      $activeParent.removeClass('border-fix');
    } else {
      $activeParent.addClass('border-fix');
    }  
  }, 0); // Timeout 0 assures scroll has stopped
});
$(function() {
    var $activeParent = $('#dr-docs-sidebar .dr-docs-sidenav .active');
    if ($activeParent.find('.nav li.active').length > 0) {
      $activeParent.removeClass('border-fix');
    } else {
      $activeParent.addClass('border-fix');
    }
});


var compileContrastLink = function(){
    var text = $("#color-text").val();
    var background = $("#color-background").val();

    $("#combo-link").attr("href", "http://jxnblk.com/colorable/demos/text/?background=%23"+background+"&foreground=%23"+text);

    $(".color-combo-wrap").css({color:"#"+text, backgroundColor:"#"+background});
}

$("#color-background").on("change", compileContrastLink);
$("#color-text").on("change", compileContrastLink);
