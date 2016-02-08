<?php

/************* CUSTOMIZE ADMIN *******************/

// Custom Backend Footer
function digitalriver_custom_admin_footer() {
    _e( '<span id="footer-thankyou">Developed by <a href="http://www.olson.com/" target="_blank">Olson</a></span>.', 'digitalriver' );
}

// adding it to the admin area
add_filter( 'admin_footer_text', 'digitalriver_custom_admin_footer' );