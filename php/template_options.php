<?php
/**
 * Theme settings page
 *
 * @return void
 */
function setup_theme_admin_menus() {
    add_submenu_page('themes.php', 'Theme Options', 'Theme Options', 'manage_options', 'theme-elements', 'theme_option_settings');
}

function theme_option_settings() {
    echo "Setup options here, docs: http://wp.tutsplus.com/tutorials/theme-development/create-a-settings-page-for-your-wordpress-theme/";
}

//add_action("admin_menu", "setup_theme_admin_menus");