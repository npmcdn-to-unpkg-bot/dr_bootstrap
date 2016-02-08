<!-- Categories -->
<div class="sidebar_container">
    <h2>Categories</h2>
    <?php
    $categories = get_categories();
    $blog_url   = get_permalink(get_page_by_title('Blog'));
    ?>
    <ul class="categories">
        <?php
        $category_args = array(
            'title_li'   => '',
            'show_count' => true,
            'hide_empty' => false,
            'exclude' => array(1),
        );
        ?>

        <div class="hide_on_mobile">
            <?php wp_list_categories($category_args); ?>
        </div>

        <div class="show_on_mobile">
            <?php
            $category_args['type'] = 'post';
            $categories = get_categories($category_args);
            ?>
            <select id="cat_dropdown" name="cat">
            <option value=""><?php echo esc_attr( __( 'Select Category' ) ); ?></option>
                <?php foreach ($categories as $category) : ?>
                    <option value="<?php echo esc_url(get_category_link($category->term_id)); ?>" <?php echo (is_category($category->term_id)) ? 'selected="selected"': ''; ?>><?php echo $category->name; ?> (<?php echo $category->count; ?>)</option>
                <?php endforeach; ?>
            </select>
            <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('#cat_dropdown').change(function() {
                    location.href = $(this).attr('value');
                });
            });
            </script>
        </div>
    </ul>
</div>

<!-- Archives -->
<div class="sidebar_container">
    <h2>Archives</h2>

    <div class="hide_on_mobile">
        <ul class="archives">
            <?php
            $archive_args = array(
                'limit' => 10,
                'type'  => 'monthly',
                'show_post_count' => 'true',
            );

            wp_get_archives($archive_args);
            ?>
        </ul>
    </div>

    <div class="show_on_mobile">
        <select id="archive-dropdown" name="archive-dropdown">
            <option value=""><?php echo esc_attr( __( 'Select Month' ) ); ?></option>
            <?php
            $archive_args['format'] = 'option';
            wp_get_archives($archive_args);
            ?>
        </select>
        <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('#archive-dropdown').change(function() {
                location.href = $(this).attr('value');
            });
        });
        </script>
    </div>
</div>

<!-- About Us
<div class="sidebar_container">
    <h2>About Us</h2>
    <ul class="about">
        <li><a href="<?php echo get_permalink(get_page_by_title('Our Authors')); ?>">Our Authors</a></li>
    </ul>
</div>
 -->