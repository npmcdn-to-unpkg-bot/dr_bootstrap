
// Prevent name collisions wrapping the code in an anonymous function.
jQuery(function ($) {
	/*
	 * Function to load handlers for country drop down changes.
	 */
	function on_country_change() {
		// Country change behaviour.
		$('[name=country]').on('change', function () {
			if ($(this).val() == 'US') {
				$('[regioncode=US]').removeAttr('disabled').show();
				$('[regioncode=CA]').attr('disabled', 'disabled').hide();
			}
			else if ($(this).val() == 'CA') {
				$('[regioncode=CA]').removeAttr('disabled').show();
				$('[regioncode=US]').attr('disabled', 'disabled').hide();
			}
			else {
				$('[name=region] option:first').attr('selected', 'selected');
				$('[name=region]').attr('disabled', 'disabled');
			}
		});
	}

	/*
	 * Function to load handlers for field modifications.
	 */
	function on_field_change() {
		/*
		 * Handlers to remove error messages
		 */
		$('[type="text"]').not($('[name="email"]')).on('keyup', function () {
			if ($(this).val()) {
				$(this).closest('.control-group').next('.alert').hide();
				$(this).closest('.control-group').removeClass('error').addClass('success');
			}
			else {
				$(this).closest('.control-group').next('.alert').show();
				$(this).closest('.control-group').removeClass('success').addClass('error');
			}
		});

		$('[name="email"]').on('keyup', function () {
			if (/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i.test($(this).val())) {
				$(this).closest('.control-group').next('.alert').hide();
				$(this).closest('.control-group').removeClass('error').addClass('success');
			}
			else {
				$(this).closest('.control-group').next('.alert').show();
				$(this).closest('.control-group').removeClass('success').addClass('error');
			}
		});

		$('select').on('change', function () {
			if ($(this).val()) {
				$(this).closest('.control-group').next('.alert').hide();
				$(this).closest('.control-group').removeClass('error').addClass('success');
			}
			else {
				$(this).closest('.control-group').next('.alert').show();
				$(this).closest('.control-group').removeClass('success').addClass('error');
			}
		});
	}

	/*
	 * Colorbox jQuery plugin definition.
	 * Used for the contact form as a modal dialog.
	 * -- Working towards defining this in admin
	 */
	if (contact_is_modal == 'TRUE') {
		$('#show_colorbox').on('click', function () {
			$.colorbox({
				html      :$('.content_inner').html(),
				width     :'700',
				height    :'600',
				onComplete:function () {
					on_country_change();
					on_field_change();
				}
			});
		});
	}
	else {
		on_country_change();
		on_field_change();
	}

	/*
	 * Behavior of the Country & State dropdowns.
	 * 
	 */
	// Initial state.
	if ($('[name=country]').val() == 'US') {
		$('[regioncode=US]').removeAttr('disabled').show();
		$('[regioncode=CA]').attr('disabled', 'disabled').hide();
	}
	else if ($('[name=country]').val() == 'CA') {
		$('[regioncode=CA]').removeAttr('disabled').show();
		$('[regioncode=US]').attr('disabled', 'disabled').hide();
	}
	else {
		$('[name=region] option:selected').removeAttr('selected');
		$('[name=region] option:first').attr('selected', 'selected');
		$('[name=region]').attr('disabled', 'disabled').last().hide();
	}

	/*
	 * Location w/ Google Maps. Start zoomed.
	 */
	$('.cf-contact-form-location-placeholder').each(function () {
		$(this).gmap3({
			marker:{
				address:$(this).parent().find('.cf-contact-form-location-address').text()
			},
			map   :{
				options:{
					zoom:16
				}
			}
		});
	});

	/*
	 * Control modal dialog opening on contact form errors.
	 */
	if (contact_is_modal == 'TRUE' && error) {
		$('#show_colorbox').trigger('click');
	}
});