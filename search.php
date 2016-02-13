<?php
/**
 * Search Page Template
 */
get_header();

// Gets solutions parent page, so we can get the ID
$solutions_parent    = get_field('solution_parent_page', 'option');
$our_expertise_types = array('events', 'post', 'press_release', 'media_coverage');

$areas = array(
    $solutions_parent->ID => 'solutions',
);

$posts_array = array();
while ( have_posts() ) {
    the_post();

    // Get the excerpt
    ob_start();
    the_excerpt();
    $post->content = ob_get_contents();
    ob_end_clean();

    $tm_parent = get_top_parent_page_id($post);

    // Categorize the results
    if (isset($areas[$tm_parent])) {
        $posts_array[$areas[$tm_parent]][] = $post;
    } elseif (in_array($post->post_type, $our_expertise_types)) {
        //print_r($post);
        $posts_array['our_expertise'][] = $post;
        //$posts_array['our_expertise']['id'] = $post->ID;
    } else {
        $posts_array['others'][] = $post;
    }
}
?>

    <section id="search_results">
        <div class="container">
            <?php if (have_posts()) : ?>
                <div class="row">
                    <div class="span_12">
                        <div class="splitter"></div>
                    </div>
                </div>
                
                <?php if (isset($posts_array['solutions'])) : ?>
                <section class="solution_results">
                    <div class="row">
                        <div class="span_12">
                            <h1><?php _e('Solution Results', 'search'); ?></h1>
                        </div>
                    </div>
                    
                    <div class="row">
                    <?php
                    $solution_count = count($posts_array['solutions']);
                    $i = 1;
                    foreach ($posts_array['solutions'] as $result) : ?>
                        <section class="col col-md-6 <?php echo ($i === 2) ? 'last':''; ?>">
                            <div class="top dotted_splitter"></div>
                            <section class="solution">
                                <div class="text_container">
                                    <header class="title"><?php echo $result->post_title; ?></header>
                                    <p class="intro"><?php echo $result->content; ?></p>
                                </div>
                                <div class="button_container">
                                    <a href="<?php echo get_permalink($result->ID); ?>" class="button">
                                        <div class="text"><?php _e('Details', 'search'); ?></div>
                                        <div class="arrow"></div>
                                    </a>
                                </div>
                            </section>
                            <div class="dotted_splitter"></div>
                        </section>
                        <?php if (($i % 2) === 0) : $i = 0; ?>
                            <div class="clear"></div>
                            </div><div class="row">
                        <?php endif; ?>
                    <?php $i++; endforeach; ?>
                    <div class="clear"></div>
                    </div>

                    <div class="row">
                        <div class="span_12">
                            <div class="splitter last"></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </section>
                <?php endif; ?>

                <?php if (isset($posts_array['our_expertise'])) : ?>
                <section class="our_expertise_results">
                    <div class="row">
                        <div class="span_12">
                            <h1><?php _e('Our Expertise Results', 'search'); ?></h1>
                        </div>
                    </div>
                    
                    <div class="row">
                        <?php
                        $first = true;
                        $i = 1;
                        foreach ($posts_array['our_expertise'] as $result) :
                            //print_r($result);
       
                            $link = (isset($result->fields->download_link) && $result->fields->download_link)? $result->fields->download_link: get_permalink($result->ID);
                            
                            // Figure out title for result
                            switch ($result->post_type) :
                                case 'press_release':
                                    $title = "Press Release";
                                    break;
                                case 'post':
                                    $title = "Blog Post";
                                    break;
                                case 'case-stories':
                                    $title = "Case Story";
                                    break;
                                case 'white-papers':
                                    $title = "White Paper";
                                    break;
                                case 'events':
                                    $title = $result->post_title;

                                    $external = get_field( "external_link", $result->ID );
                                    if($external){
                                        $link = get_field( "link_url", $result->ID );
                                    }

                                    break;
                                default:
                                    $title = $result->post_title;
                                    break;
                            endswitch;
                        ?>
                            <div class="result_listing col col-md-6 <?php echo ($i === 2) ? 'last':''; ?>">
                                <div class="dotted_splitter top <?php echo (!$first)? 'hidden':''; ?>"></div>
                                <section class="container row">
                                    <div class="image col span_2 hide_on_mobile"><img src="<?php echo get_image_path('search_icons/' . $result->post_type . '.png'); ?>"></div>
                                    <div class="content col span_10 last">
                                        <a href="<?php echo $link; ?>"><header class="title"><?php echo $title; ?></header></a>
                                        <section class="body"><?php echo $result->content; ?></section>
                                        <a href="<?php echo $link; ?>" class="link"><?php _e('Read More', 'search_results'); ?></a>
                                    </div>
                                    <div class="clear"></div>
                                </section>
                                <div class="dotted_splitter bottom"></div>
                            </div>
                            <?php if (($i % 2) === 0) : $i = 0; ?>
                                <?php $first = false; ?>
                                <div class="clear"></div>
                                </div><div class="row">
                            <?php endif; ?>
                        <?php $i++; endforeach; ?>
                        <div class="clear"></div>
                    </div>

                    <div class="row">
                        <div class="span_12">
                            <div class="splitter last"></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </section>
                <?php endif; ?>

                <?php if (isset($posts_array['others'])) : ?>
                <section class="page_results">
                    <div class="row">
                        <div class="span_12">
                            <h1><?php _e('Page Results', 'search'); ?></h1>
                        </div>
                    </div>
                    <?php foreach ($posts_array['others'] as $result) : ?>
                        <div class="row">
                            <div class="span_12">
                                <div class="dotted_splitter"></div>
                                <section class="other_result">
                                    <p>
                                        <?php echo $result->content; ?>
                                        <a href="<?php echo get_permalink($result->ID); ?>" class="link"><?php _e('Read More', 'search'); ?></a>
                                    </p>
                                    <div class="clear"></div>
                                </section>
                                <div class="clear"></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    <?php endforeach; ?>
                    <div class="row">
                        <div class="span_12">
                            <div class="dotted_splitter"></div>
                            <div class="splitter"></div>
                        </div>
                    </div>
                </section>
                <?php endif; ?>
            <div class="clear"></div>
            </div>
        <?php else : ?>
                <section class="no_results">
                    <header>No Results</header>
                    <p class="text">Sorry, we can't seem to find what you're looking for. Please modify your search and try again.</p>
<!--                     <div class="cta_box">
                        <ul>
                            <li><strong>Contact us today to discuss how we can help your business grow.</strong></li>
                            <li><a href="http://info.digitalriver.com/contact-us" class="button"><div class="text">Contact Us</div><div class="arrow"></div></a>
                        </ul>
                    </div> -->
                </section>
        <?php endif; ?>
    </section>

<?php get_footer(); ?>
