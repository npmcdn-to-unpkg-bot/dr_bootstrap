( function( global, $ ) {

    var editor,
        syncCSS = function() {
            $( '#custom_css_textarea' ).val( editor.getSession().getValue() );

            console.log($( '#custom_css_textarea' ).val());
        },
        loadAce = function() {
            editor = ace.edit( 'custom_css' );
            global.safecss_editor = editor;
            editor.getSession().setUseWrapMode( true );
            editor.setShowPrintMargin( false );
            editor.getSession().setValue( $( '#custom_css_textarea' ).val() );
            jQuery.fn.spin&&$( '#custom_css_container' ).spin( false );
            editor.on("change", syncCSS);
        };

    if ( $.browser.msie&&parseInt( $.browser.version, 10 ) <= 7 ) {
        $( '#custom_css_container' ).hide();
        $( '#custom_css_textarea' ).show();
        return false;
    } else {
        $( global ).load( loadAce );
    }


    var js_editor,
        syncJS = function() {
            $( '#custom_js_textarea' ).val( js_editor.getSession().getValue() );
        },
        loadJSAce = function() {
            js_editor = ace.edit( 'custom_js' );
            global.safejs_editor = js_editor;
            js_editor.getSession().setUseWrapMode( true );
            js_editor.setShowPrintMargin( false );
            js_editor.getSession().setValue( $( '#custom_js_textarea' ).val() );
            jQuery.fn.spin&&$( '#custom_js_container' ).spin( false );
            js_editor.on("change", syncJS);
        };

    if ( $.browser.msie&&parseInt( $.browser.version, 10 ) <= 7 ) {
        $( '#custom_js_container' ).hide();
        $( '#custom_js_textarea' ).show();
        return false;
    } else {
        $( global ).load( loadJSAce );
    }



    var html_editor,
    syncHTML = function() {
        $( '#general_html_textarea' ).val( html_editor.getSession().getValue() );
    },
    loadHTMLAce = function() {
        html_editor = ace.edit( 'general_html' );
        global.safehtml_editor = html_editor;
        html_editor.getSession().setUseWrapMode( true );
        html_editor.setShowPrintMargin( false );
        html_editor.getSession().setValue( $( '#general_html_textarea' ).val() );
        jQuery.fn.spin&&$( '#general_html_container' ).spin( false );
        html_editor.on("change", syncHTML);
    };

    if ( $.browser.msie&&parseInt( $.browser.version, 10 ) <= 7 ) {
        $( '#general_html_container' ).hide();
        $( '#general_html_textarea' ).show();
        return false;
    } else {
        $( global ).load( loadHTMLAce );
    }

} )( this, jQuery );