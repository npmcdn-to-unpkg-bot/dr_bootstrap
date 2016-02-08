<?php
/**
 * Template Name: Template Events
 */
?>
<?php get_header(); ?>
<?php get_template_part('masthead'); ?>

    <!-- Content Container -->
    <section class="content_container">
  
        <div class="container">
         

                        <?php
                        $cat = get_the_category( $post->orig_id );
                        if ((!empty($cat) || $post->post_content) && !get_field('hide_title')) :
                        ?>
                        <div class="body_title"><?php the_title(); ?></div>
                        <?php endif; ?>
                    
        
                            <?php if ($post) : ?>
                               
                                <div class="content post_content"><?php echo apply_filters('the_content', $post->post_content); ?></div>
                                <!-- <div class="content post_content"><?php //echo (get_the_content()) ? get_the_content(): $post->post_content; ?></div> -->
                            <?php endif; ?>
            </div>

            <div class='row2'>
                        <?php 
                           $cat = get_the_category( $post->orig_id );
                           if (!empty($cat)) {
                               $post_category = $cat[0];
                               $criteria = (array)$post_category;
                               $cid = $criteria['cat_ID'];
                           }
                           ?>
                           <?php
                            if(empty($cat)) {
                                dynamic_sidebar_cache('template_test_content');
                            }
                            ?>          
                            <div class='clear'></div>
            </div>

    <div class='featured_wrapper'>
        <div class='featured_area'>
            <div class='featured' id='featured_1'>
                <div class='video_wrapper'>
                    <div class='embed-container'>
                        <iframe id="irce" src="https://player.vimeo.com/video/130242077?api=1&amp;player_id=irce" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
                    </div>
                </div>
                <div class='copy_wrapper'>
                    <div class='quote'><div>Built for speed: Digital River’s racecar simulator at IRCE exhibited the company’s promise to increase clients’ speed to revenue.</div></div>
                </div>
                <div class='clear'></div>
            </div>
            
            <div class='clear'></div>
        </div>
        <div class='clear'></div>
    </div>

    </section>

<script>
 jQuery(document).ready(function(){
        jQuery(".button.watch").on("click",function(){
          jQuery(document).scrollTop(jQuery("#"+jQuery(this).data("videoid")).offset().top-130);
          jQuery("#"+jQuery(this).data("videoid")).vimeo("play");
        });
  });

</script>

<?php get_footer(); ?>
