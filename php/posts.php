<?php

class Posts {

  protected $_post;
  protected $_relationships;

  /**
   * Get the field data
   */
  public function __construct() {
    $this->_relationships = get_field('post_detail_page_relationship', 'options');
  }

  /**
   * Capture post being used at the moment
   */
  public function capture() {
    global $wp_query;
    $this->_post = $wp_query->post;
    var_dump($this->_post, get_post_meta($this->_post->ID));
  }
}

/**
 * Starts up the post class on init
 */
function post_init() {
  $posts = new Posts;
  if (!$posts->capture()) {
    return false;
  }
}
//add_action('wp_head', 'post_init');