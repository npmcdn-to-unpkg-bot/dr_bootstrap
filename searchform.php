<form action="<?php echo home_url( '/' ); ?>" method="get" class="search_form">
    <svg  class="search_icon" version="1.1" width="13" height="16"xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewBox="0 0 13.4 16" enable-background="new 0 0 13.4 16" xml:space="preserve">
  <path id='search_path' d="M13.2 13.4l-2.6-3.9c0.8-1 1.2-2.2 1.2-3.6C11.8 2.6 9.2 0 5.9 0 2.6 0 0 2.6 0 5.9c0 3.3 2.6 5.9 5.9 5.9 0.5 0 1.1-0.1 1.6-0.2l2.6 3.9c0.3 0.5 0.9 0.6 1.4 0.3l1.5-1C13.4 14.5 13.5 13.9 13.2 13.4zM2.5 5.9C2.5 4 4.1 2.4 6 2.4c1.9 0 3.5 1.6 3.5 3.5 0 1.9-1.6 3.5-3.5 3.5C4.1 9.4 2.5 7.8 2.5 5.9z"/>
</svg>

    <input class="search_box" type="text" name="s" id="search" placeholder='' value="<?php the_search_query(); ?>">
</form>