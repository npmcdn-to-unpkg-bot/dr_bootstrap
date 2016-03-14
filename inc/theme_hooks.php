<?php

/**
 * Homepage
 *
 * @hooked hero_banner_section   - 10
 * @hooked why_work_section - 20
 * @hooked clients_section    - 30
 * @hooked news_and_events_section  - 40
 * @hooked get_recent_resources  - 50
 */
add_action( 'homepage', 'hero_banner_section',   10 );
add_action( 'homepage', 'why_work_section', 20 );
add_action( 'homepage', 'clients_section',    30 );
add_action( 'homepage', 'news_and_events_section',  40 );
add_action( 'homepage', 'get_recent_resources',  50 );


/**
 * Branded Page
 *
 * @hooked advanced_master_header   - 10
 * @hooked lists - 20
 * @hooked four_boxes - 30
 * @hooked display_tags    - 40
 */
add_action( 'branded', 'advanced_master_header',   10 );
add_action( 'branded', 'lists', 20 );
add_action( 'branded', 'four_boxes',    30 );
add_action( 'branded', 'display_tags',  40 );
