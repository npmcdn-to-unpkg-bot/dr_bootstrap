<section id="utility_mobile_navigation" class="show_on_mobile">
    <section class="mobile_container">
        <section class="search_area"><?php get_search_form(true); ?></section>
        <div class="clear"></div>
        <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
    </section>
</section>