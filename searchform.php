<form action="<?php echo home_url( '/' ); ?>" method="get" class="search_form">
    <input class="search_box" type="text" name="s" id="search" placeholder='' value="<?php the_search_query(); ?>">
</form>