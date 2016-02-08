/*
 * Tile Plugin, jQuery
 * by Grandville Ricks. (c) 2013, Olson
 * Purpose: This custom plugin is used for displaying content beneath images.
 *			
 * Options: empty_msg : String. Message that gets displayed in the event we don't have any content for the image.
 *			tiles : Object. Contains the messages that will be displayed per image. Note: You can use HTML in the tile as well.
 *			openOnDefault: String. Used for specifying the default tile to open. We can open any tile on default.
 *			openAll: String. Used for opening all of the tiles! Wee!
 */ 
 
jQuery(function ($) {
	var methods = {
		init:function (options) {
			// DI needs some default options. TODO: extend into wordpress?
			var settings = $.extend({
				'empty_msg':'Sorry, there is no content at the moment.',
				'tiles':{},
				'openOnDefault':'',
				'openAll':false
			}, options);

			/*
			 * Relocate tiles if needed.
			 */
			$(window).resize(function () {
				/*
				 * Rebuild the HTML template if there was a resize.
				 */
				widgetize($('.tilePlugin-tile'));
			});


			/*
			 * Add style classes to the tiles.
			 */
			for (var i = 0; i < this.length; i++) {
				this.eq(i).addClass('tilePlugin-tile');
			}

			var this$ = this;

			function widgetize(this$) {
				/*
				 * Organize tiles in rows to easy the interaction and position.
				 * Only do this if is first_load, not on resize to not clutter the DOM.
				 */
				if ($(window).width() > 640) {
					for (var i1 = 0; i1 < this$.length; i1++) {
						this$.eq(i1 * 3 + 0).add(this$.eq(i1 * 3 + 1)).add(this$.eq(i1 * 3 + 2)).wrapAll('<div class="tilePlugin-row"></div>');
					}
				}
				else {
					for (var i2 = 0; i2 < this$.length; i2++) {
						this$.eq(i2).wrap('<div class="tilePlugin-row tilePlugin-small"></div>');
					}
				}

				/*
				 * Return this to maintain jQuery chainability.
				 */
				return this$.each(function () {
					/*
					 * Bind required events.
					 */
					// Show info container when click on tile.
					$(this).bind('click.tilePlugin', function () {
						/*
						 * Tile specific behaviors.
						 */
						if (settings.openAll) {
							$(this).parent().find('.tilePlugin-tile').removeClass('tilePlugin-tile-selected');
						}
						else {
							$('.tilePlugin-tile').removeClass('tilePlugin-tile-selected');
						}
						$(this).addClass('tilePlugin-tile-selected');

						/*
						 * Info container specific behaviors.
						 */
						if (settings.openAll) {
							$(this).parent().find('.tilePlugin-info').remove();
						}
						else {
							$('.tilePlugin-info').remove();
						}

						var info_box_width = '';
						if ($(window).width() > 640) {
							info_box_width = ($(this).innerWidth() * 3 + 1.3 * ($(this).outerWidth(true) - $(this).outerWidth()));
						}
						else {
							info_box_width = $(this).innerWidth();
						}

						$(this).parent().append('<div class="tilePlugin-info" style="display:none;width:' + info_box_width + 'px">' + ((settings.tiles[$(this).attr('id')]) ? settings.tiles[$(this).attr('id')] : settings.empty_msg) + '<a href="" onclick="return false;" class="tilePlugin-close">X</a></div>');
						$(this).parent().find('.tilePlugin-info').show();
					});

					// Handler for info container closing.
					$(this).parent().on('click.tilePlugin', '.tilePlugin-close', function () {
						$(this).parent().hide();
						$('.tilePlugin-tile').removeClass('tilePlugin-tile-selected');
					});

					/*
					 * Initial showing of info box.
					 */
					if (settings.openOnDefault == $(this).attr('id')) {
						$(this).trigger('click.tilePlugin');
					}
				});
			}

			// Run main function.
			widgetize(this);
		}
	};

	/*
	 * jQuery plugin factory declaration.
	 */
	$.fn.tilePlugin = function (method) {
		if (methods[method]) {
			return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
		} else {
			return methods.init.apply(this, arguments);
		}
	};
});
