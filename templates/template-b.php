<?php
/**
 * Template Name: Template B
 */
?>
<?php get_header(); ?>
<?php get_template_part('masthead'); ?>

    <!-- Content Container -->
    <section id="template_b" class="content_container container">
        <div class="left_border"></div>
            <div class="row">
                <section class="main_content col-md-8">

                        <?php
                        $cat = get_the_category( $post->orig_id );
                        if ((!empty($cat) || $post->post_content) && !get_field('hide_title')) :
                        ?>
                        <div class="body_title"><?php the_title(); ?></div>
                        <?php endif; ?>
                    
                        
                            <?php if ($post) : ?>
                                <div class="splitter"></div>
                                <div class="content post_content"><?php echo apply_filters('the_content', $post->post_content); ?></div>
                                <!-- <div class="content post_content"><?php //echo (get_the_content()) ? get_the_content(): $post->post_content; ?></div> -->
                            <?php endif; ?>

                            <?php if (get_field('show_latest_post')) : ?>
                            <div class="widget row">
                                <section class="latest_post col">
                                    <div class="splitter"></div>
                                    <?php
                                    $latest_post = get_field('latest_news_post');
                                    $latest_post->fields = get_fields($latest_post->ID);
                                    $latest_post_object  = get_post($latest_post->ID);
                                    $latest_post_excerpt = $latest_post->fields['intro_text'];
                                    ?>
                                    <div class="header"><?php the_field('latest_post_header'); ?></div>
                                    <div class="clear"></div>
                                    <?php $latest_post_link = ($latest_post->fields['external_link'])?: get_permalink($latest_post->ID); ?>
                                    <a href="<?php echo $latest_post_link; ?>" class="title" style="font-style:normal;"><?php echo $latest_post->post_title; ?></a>
                                    <p><?php echo $latest_post_excerpt; ?></p>
                                    <a href="<?php echo $latest_post_link; ?>" class="link"><?php the_field('latest_post_read_more_link'); ?></a>
                                    <div class="splitter"></div>
                                </section>
                            </div>
                            <?php endif; ?>

                        <?php 
                           $cat = get_the_category( $post->orig_id );
                           if (!empty($cat)) {
                               $post_category = $cat[0];
                               $criteria = (array)$post_category;
                               $cid = $criteria['cat_ID'];
                           }
                           ?>
                           <?php if(empty($cat)) { ?>
                            <?php dynamic_sidebar_cache('template_b_content'); ?>
                            <?php } ?>
                </section>
                <div class="border_left"></div>

                <!-- Sidebar -->
                <section class="rail col-md-4 last col">
                    <?php
                    change_sidebar_context();
                    dynamic_sidebar_cache('template_b_right_sidebar');
                    revert_sidebar_context();
                    ?>
                </section>
        </div>

                </section>
        


<script>
    jQuery(function($) {
        var open = false,
            tab  = false,
            isMobile = $('.hide_on_mobile:visible').length == 0;

        $(window).load(function() {
            $('#template_b .tabbed_content .tab_header img').greyScale();
        }).resize(function() {
            isMobile = $('.hide_on_mobile:visible').length == 0
        });

        // Stop propogation
        $('.tab_content_container > a').click(function(e) {
            e.stopPropagation();
        });
    
        // Closes the content
        $('.tab_content_container').on('click', function(e) {
            // Catch anchor tags
            var $target = $(e.target);
            if ($target.is('a') && !$target.hasClass('content_exit')) {
                location.href = $target.attr('href');
                return false;
            }

            e.preventDefault();
            var container = $(this);
            
            $('.gsCanvas').stop().animate({'opacity': 1}, 400);
            $('.gsCanvas').data('is-gray', true);

            // Hide content container and change arrow status
            container.slideUp({
                duration: 500,
                complete: function() {
                    change_status();
                    container.html('');
                }
            });
        });

        // Loop through each row and check drawer status on the first tab
        $('.tab_row').each(function() {
            // Get the first tab
            var first_tab = $(this).children('.tab:first'),
                content   = first_tab.children('.content').html(),
                drawer_status = first_tab.children('.content').data('open');

            // If drawer status is open, display content
            if (drawer_status) {
                $(this).children('.tab_content_container').html(content);
            }
        });

        // Click to show content about current tab
        $('.tab_header').click(function(e) {
            
            var self = $(this);
            var srcElement = $(e.srcElement);

            open = (tab[0] == self[0]) ? true: false;

            change_status();

//          $('.gray_disabled').switchClass('gray_disabled', 'gray');
            
            if (!open) {
                open = true;
                tab = self;
                // Get content
                var content = self.siblings('.content').html();
                
                // Force grayscale
                if ( srcElement.hasClass('text') || srcElement.hasClass('arrow') ) {
                    $('canvas', self).fadeOut(500);
                }

                // Change arrow and overlay
                self.find('.arrow').addClass('selected');
                //self.parents('.tab').siblings('.tab').find('.overlay').addClass('selected');
                //self.children('.image').children('img').switchClass('gray', 'gray_disabled', 1000);

                // Display content
                if (isMobile) {
                    self.children('.tab_content_container').slideUp(500, function() {
                        $('.tab_header').each(function() {
                            $(this).children('.tab_content_container').slideUp(500);
                        });
                        self
                            .children('.tab_content_container')
                            .html(content)
                            .slideDown(1000, function() {
                                $('html, body').animate({
                                    scrollTop: self.offset().top + self.children('.image').height()
                                }, 1000);
                            });
                    });
                } else {
                    var myParent = self.parents('.tab_row');
                    myParent.children('.tab_content_container').slideUp(500, function() {
                        $('.tab_row').each(function() {
                            if ($(this) != myParent) {
                                $(this).children('.tab_content_container').slideUp(500);
                            }
                        });
                        myParent
                            .children('.tab_content_container')
                            .html(content)
                            .slideDown(1000, function() {
                                $('html, body').animate({
                                    scrollTop: self.offset().top - 60
                                }, 1000);
                            });
                    });
                }
            } else {
                open = false;
                tab = false;
                var container = $(this).parents('.tab_row').children('.tab_content_container');
                var myParent = $(this).parents('.tab_row');
                
                // Hide content container and change arrow status
                if (isMobile) {
                    $('.tab_header').each(function() {
                        $(this).find('.tab_content_container').slideUp(500);
                    });
                } else {
                    $('.tab_row').each(function() {
                        if ($(this) != myParent) {
                            $(this).children('.tab_content_container').slideUp(500);
                        }
                    });
                }

                container.slideUp(500, function() {
                    container.html('');
                });
            }
        });

        function change_status() {
            $('.tab_header').each(function() {
                if ( $(this).find('.arrow').hasClass('selected') ) {
                    $(this).find('.arrow').removeClass('selected');
                    $(this).find('canvas').fadeIn(500);
                }
            });
        }
    });
</script>
    
<?php get_footer(); ?>
