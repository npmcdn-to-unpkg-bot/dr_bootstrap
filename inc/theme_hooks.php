<?php

/**
 * Homepage
 *
 * @hooked hero_banner_section   - 10
 * @hooked why_work_section - 20
 * @hooked clients_section    - 30
 * @hooked news_and_events_section  - 40
 */
add_action( 'homepage', 'hero_banner_section',   10 );
add_action( 'homepage', 'why_work_section', 20 );
add_action( 'homepage', 'clients_section',    30 );
add_action( 'homepage', 'news_and_events_section',  40 );
add_action( 'homepage', 'get_recent_resources',  40 );
