/*
 *  jQuery $.greyScale Plugin v0.2
 *  Written by Andrew Pryde (www.pryde-design.co.uk)
 *  Date: Mon 1 Aug 2011
 *  Licence: MIT Licence
 *
 *  Copyright (c) 2011 Andrew Pryde
 *  Permission is hereby granted, free of charge, to any person obtaining a copy of this 
 *  software and associated documentation files (the "Software"), to deal in the Software
 *  without restriction, including without limitation the rights to use, copy, modify, merge,
 *  publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons 
 *  to whom the Software is furnished to do so, subject to the following conditions:
 *
 *  The above copyright notice and this permission notice shall be included in all copies or 
 *  substantial portions of the Software.
 *
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING
 *  BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND 
 *  NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM,
 *  DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

(function($){

  $.fn.greyScale = function(args) {
    $options = $.extend({
      fadeTime: $.fx.speeds._default,
      reverse: false
    }, args);
    function greyScale(image, width, height) {
      can = $('<canvas>')
        .css({
          'display' : 'none',
          'left' : '0',
          'position' : 'absolute',
          'top' : '0',
          height: 'auto',
          width: '100%'
        })
        .attr({
          'width': width,
          'height': height
        })
        .addClass('gsCanvas');
      ctx = can[0].getContext('2d');
      ctx.drawImage(image, 0, 0, width, height);

      imageData = ctx.getImageData(0, 0,  width, height);
      px = imageData.data;
      for (i = 0; i < px.length; i+= 4) {
        grey = px[i] * .3 + px[i+1] * .59 + px[i+2] * .11;
        px[i] = px[i+1] = px[i+2] = grey;
      }
      ctx.putImageData(imageData, 0, 0);
      return can;
    }
    if ($.browser.msie) {
      // IE doesn't support Canvas so use it's horrible filter syntax instead
      this.each(function(){
        var greyscale = $options.reverse ? 0 : 1;
        $(this).css({
          'filter': 'progid:DXImageTransform.Microsoft.BasicImage(grayscale=' + greyscale + ')',
          'zoom': '1'
        });
        $(this).hover(function() {
          var greyscale = $options.reverse ? 1 : 0;
          $(this).css({
            'filter': 'progid:DXImageTransform.Microsoft.BasicImage(grayscale=' + greyscale + ')'
          });
        }, function() {
          var greyscale = $options.reverse ? 0 : 1;
          $(this).css('filter', 'progid:DXImageTransform.Microsoft.BasicImage(grayscale=' + greyscale + ')');
        });
      });
    } else {
      this.each(function(index) {
        $(this).wrap('<div class="gsWrapper">');
        gsWrapper = $(this).parent();
        gsWrapper.css({
          'position' : 'relative',
          'display' : 'inline-block'
        });
        if (window.location.hostname !== this.src.split('/')[2]) {
          // If the image is on a different domain proxy the request
         $.getImageData({
            url: $(this).attr('src'),
            success: $.proxy(function(image) {
                can = greyScale(image, image.width, image.height);
                if ($options.reverse) { can.appendTo(gsWrapper).css({"display" : "block", "opacity" : "0"}); }
                else { can.appendTo(gsWrapper).fadeIn($options.fadeTime); }
              }, gsWrapper),
            error: function(xhr, text_status){
              // silently fail on error
            }
          });
        } else { // If the image is on the same domain don't proxy the request
          can = greyScale($(this)[0], $(this).width(), $(this).height());
          if ($options.reverse) { can.appendTo(gsWrapper).css({"display" : "block", "opacity" : "0"}); }
          else { can.appendTo(gsWrapper).fadeIn($options.fadeTime); }
        }
    });

    var myParent = $(this).parent();
      
    myParent.delegate('.gsCanvas', 'mouseover mouseout', function(event) {
      over = $options.reverse ? 1 : 0;
      out = $options.reverse ? 0 : 1;
      (event.type == 'mouseover') && $(this).stop().animate({'opacity': over}, $options.fadeTime);
      (event.type == 'mouseout') && $(this).stop().animate({'opacity': out}, $options.fadeTime); 
    });
    

    // RJM Adding click functionality
    myParent.delegate('.gsCanvas', 'click', function(event) {
    	var isGray = (typeof($(this).data('is-gray')) == 'undefined') ? true : $(this).data('is-gray');
    	
    	myParent.children('.gsCanvas').stop().animate({'opacity': 1}, $options.fadeTime);
    	myParent.children('.gsCanvas').data('is-gray', true);
		myParent.delegate('.gsCanvas', 'mouseover mouseout', function(event) {
            over = $options.reverse ? 1 : 0;
            out = $options.reverse ? 0 : 1;
            (event.type == 'mouseover') && $(this).stop().animate({'opacity': over}, $options.fadeTime);
            (event.type == 'mouseout') && $(this).stop().animate({'opacity': out}, $options.fadeTime); 
        });

    	if (isGray) {
	    	$(this).parent().undelegate('.gsCanvas', 'mouseover mouseout');
	    	$(this).stop().animate({'opacity': 0}, $options.fadeTime);
	    	$(this).data('is-gray', false)
    	} else {
    		$(this).parent().delegate('.gsCanvas', 'mouseover mouseout', function(event) {
                over = $options.reverse ? 1 : 0;
                out = $options.reverse ? 0 : 1;
                (event.type == 'mouseover') && $(this).stop().animate({'opacity': over}, $options.fadeTime);
                (event.type == 'mouseout') && $(this).stop().animate({'opacity': out}, $options.fadeTime); 
            });
	    	$(this).data('is-gray', true)
    	}
    })
  }
  };
})( jQuery );

/*
 *
 *  jQuery $.getImageData Plugin 0.3
 *  http://www.maxnov.com/getimagedata
 *  
 *  Written by Max Novakovic (http://www.maxnov.com/)
 *  Date: Thu Jan 13 2011
 *
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 *  
 *  Includes jQuery JSONP Core Plugin 2.1.4
 *  http://code.google.com/p/jquery-jsonp/
 *  Copyright 2010, Julian Aubourg
 *  Released under the MIT License.
 * 
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 *  
 *  Copyright 2011, Max Novakovic
 *  Dual licensed under the MIT or GPL Version 2 licenses.
 *  http://www.maxnov.com/getimagedata/#license
 * 
 */