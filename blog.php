<?php
/**
 * Template Name: Blog
 */
?>
<?php get_header(); ?>
<?php get_template_part('masthead'); ?>

    <!-- Content Container -->
    <div id="template_b" class="blog content_container">
        <div class="left_border"></div>
        <!-- Content -->
        <div class="container blog_content_container">
            <div class="row">
                <!-- Left Column -->

                <!-- Middle Column -->
                <div class="col-md-9">
                    <div class="posts_container">
                        <?php
                        // Save the original query
                        $original_query = $wp_query;

                        // For the blog page
                        $query_args = $wp_query->query_vars;

                        // Query for page
                        if (is_page()) {
						
					
                        
						    $query_args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 5,
                                'paged' => (get_query_var('paged'))?: 1,
								
                            );
                      }else{
						  
						 /*
						  * Added in this else statement and simplified the query because the original query was breaking 
						  */
						  
						 
						  // loading parts of the original query 
						  $categoryId  = $query_args['cat'];
						  $postsPerPage  = $query_args['posts_per_page'];
						  $postType = $query_args['post_type'];
						  $year = $query_args['year'];
						  $monthnum = $query_args['monthnum'];
						  $author = $query_args['author_name'];
						  
						// create a new, simplified query
						 $query_args = array(
                                'post_type' => $postType,
                                'posts_per_page' => $postsPerPage,
								'cat' =>  $categoryId,
                                'paged' => (get_query_var('paged'))?: 1,
								'year' => $year,
								'monthnum' => $monthnum,
								'author_name' => $author
							 );
						 }
					  
					  
                        // Handles search
                        if(isset($_GET['search']) && !empty($_GET['search'])) {
                            $query_args['s'] = $_GET['search'];
                        }

                        // Set up pagination
                        if (!is_single()) {
							
							
                            // Get posts
                            wp_reset_query();
                            if (is_search()) {
                                relevanssi_do_query($query_args);
                            } else {
                                
								query_posts($query_args);
                            }

                            // Setup Pagination
                            $big = 99999999;
                            $pagination_links = paginate_links(array(
                                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                'format' => '?paged=%#%',
                                'current' => max( 1, get_query_var('paged') ),
                                'total' => $wp_query->max_num_pages,
                                'prev_text' => __('«'),
                                'next_text' => __('»'),
                                'type' => 'array'
                            ));
                        }


                        // Loops through the pages
                  if ( have_posts() ) :
                            while ( have_posts() ) :
                                the_post(); 

                            $featured = get_field('post_call_to_action', get_the_ID());
                        ?>
                                <div class="detailed-list-item <?php echo ($featured === 'Image' || $featured === 'Video')?"row":null; ?>">

                                    <?php if ($featured === 'Image' || $featured === 'Video'): ?>
                                        <div class="col-md-5">
                                            <?php if (get_field('post_call_to_action', get_the_ID()) === 'Image') : ?>
                                                <img class='border' src="<?php the_field('post_image', get_the_ID()); ?>" alt="">
                                            <?php elseif (get_field('post_call_to_action', get_the_ID()) === 'Video') : ?>
                                                <iframe src="https://player.vimeo.com/video/<?php the_field('vimeo_video_id', get_the_ID()); ?>" class="span_12" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                                            <?php endif; ?>
                                        </div>

                                        <div class="col-md-7">
                                    <?php endif; ?>



                                    <?php if(is_single()): ?>
                                        <h1 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                                    <?php else: ?>
                                        <div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                                    <?php endif; ?>

                                    <!-- <div class="sub_title"><?php _e('By ','digital-river'); ?><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author_meta( 'display_name' ); ?></a> / <?php echo get_the_date('F j, Y'); ?></div> -->


                                    <!-- Content -->
                                    <div class="content post_content">
                                        <?php
                                        if (is_single()) {
                                            the_content();
                                        } else {
                                             vsprintf("<p>%s <a class='link' href='%s'>Read More</a></p>", array(the_excerpt(), get_permalink()));
                                        }
                                        ?>
                                    </div>

                                    <div class="meta-info-wrapper">
                                        <span><i class="fa fa-user"></i><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author_meta( 'display_name' ); ?></a></span>
                                        <span><i class="fa fa-calendar-o"></i><?php echo get_the_date('F j, Y'); ?></span>
                                    </div>


                                    <!-- Tags and Categories -->
                                    <?php if(is_single()) : ?>
                                        <div class="dotted_splitter tag_cat_split"></div>
                                        <div class="category_tag_box">
                                            <div class="top_container">
                                                <?php if (get_the_category_list()) : ?>
                                                    <div class="tags"><?php _e('Filed under:'); ?><br>
                                                        <?php echo get_the_category_list(', '); ?>
                                                    </div>
                                                <?php endif; ?>
                                                <?php if (get_the_tag_list()) : ?>
                                                    <br>
                                                    <div class="categories">Tagged as:<br>
                                                        <?php echo get_the_tag_list('', ', '); ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="comment_template">
                                        <?php comments_template(); ?>
                                        </div>
                                    <?php endif; ?>

                                    <?php if ($featured === 'Image' || $featured === 'Video'): ?>
                                        </div>
                                    <?php endif; ?>
                                </div>

                        <?php endwhile; else: ?>
                        <div class="no_results_found">
                            <h2><?php _e('Sorry, no posts matched your criteria.','digital-river'); ?></h2>
                        </div>
                        <?php endif; ?>

                        <!-- Pagination -->
                        <?php if (isset($pagination_links)) : ?>
                        <nav>
                            <ul class="pagination">
                                <?php foreach ( $pagination_links as $key => $page_link ) : ?>
                                    <li class="paginated_link<?php if ( strpos( $page_link, 'current' ) !== false ) { echo ' active'; } ?>"><?php echo $page_link ?></li>
                                <?php endforeach ?>
                            </ul>
                        </nav>    
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Right Column -->
                <?php
                $wp_query = $original_query;
                wp_reset_postdata();
                ?>
                
                <div class="col-md-3">
                    <div class="sidebar">
                        <?php get_template_part('partials/blog/sidebar', 'left'); ?>
                    </div>
                </div>

                
            </div>


        </div>
    </div>
<?php get_footer(); ?>
