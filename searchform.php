<form action="<?php echo home_url( '/' ); ?>" method="get" class="search_form">
    <input class="search_box" type="text" name="s" id="search" placeholder='' value="<?php the_search_query(); ?>">
    <input type="hidden" name="post_type" value="<?php echo (isset($_GET['type'])) ? $_GET['type'] : null; ?>" />
    <input type="submit" class="btn btn-primary" value="Search" />
</form>