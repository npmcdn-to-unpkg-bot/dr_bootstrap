<?php
/**
 * Search Page Template
 */
get_header();

// Gets solutions parent page, so we can get the ID
$solutions_parent    = get_field('solution_parent_page', 'option');
$our_expertise_types = array('events', 'post', 'press_release', 'media_coverage');

$areas = array($solutions_parent->ID => 'solutions');



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
    }else if (in_array($post->post_type, $our_expertise_types)) {
        $posts_array[$post->post_type][] = $post;
    } else {
        $posts_array['others'][] = $post;
    }
}

if(isset($_GET['type'])){
    $type = strtolower($_GET['type']);
}else{
    if(isset($_GET['post_type'])){
        $type = strtolower($_GET['post_type']);
    }else{
        $type = null;
    }
}
if($type == "pages" || $type == null){
    $posts_array = $posts_array['solutions'];
}else if($type == "resources"){
    $posts_array = $posts_array['event'];
}else if($type == "press_releases"){
    $posts_array = $posts_array['press_release'];
}else{
    $posts_array = $posts_array['media_coverage'];
}

if($type == 'newsfeed'):
    $label = "Newsfeed";
elseif($type == 'press_releases'):
    $label = "Press Releases";
elseif($type == 'resources'):
    $label = "Resources";
else:
    $label = "Pages";
endif;

?>


<style>
    h1{
        font-size:1.4em;
        font-family: "DIN Next W01 Medium",sans-serif;
        margin-bottom: 3px;
    }

    .type a{
        font-size: 1.25em;
        padding: 2px 10px;
        font-family: "DIN Next W01 Medium",sans-serif;
        border-bottom: solid 2px #EEE;
        color:#646469;
        margin:0 10px 0 0;
    }

    .type a:hover{
        border-color:#CCC;
        color:#646469;
    }

    .type a.selected{
        border-color: #00A7E1;
    }

    #search{
        width: 300px;
        border: 1px solid #CCC;
        padding: 10px 5px;
        display: block;
        float: left;
    }

    #search .button{
        margin: 0;
    }

    .button{
        padding: 12px 12px 7px;
        margin: 0px;
        display: inline-block;
        text-decoration: none;
        transition: all 200ms ease-out 0s;
        font-size: 1.1em;
        text-transform: uppercase;
        color: #FFF;
        background-color: #00A7E1;
        border: 2px solid #007EB5;
        line-height: 1;
        cursor: pointer;
        font-family: "DIN Next W01 Medium",sans-serif;
    }

    .type{
        margin: 25px 0px 35px;
    }

</style>



    <section id="search_results">
        <div class="container">
            <?php if (have_posts()) : ?>
                    <?php get_search_form(true); ?>

                    <nav class="type">
                        <a href="/?s=<?php echo $_GET['s']; ?>&amp;lang=<?php echo ICL_LANGUAGE_CODE; ?>&amp;type=pages" class="<?php echo ($type == 'pages' || $type == null) ? "selected" : null; ?>">Pages</a>
                        <a href="/?s=<?php echo $_GET['s']; ?>&amp;lang=<?php echo ICL_LANGUAGE_CODE; ?>&amp;type=resources" class="<?php echo ($type == 'resources') ? "selected" : null; ?>">Resources</a>
                        <a href="/?s=<?php echo $_GET['s']; ?>&amp;lang=<?php echo ICL_LANGUAGE_CODE; ?>&amp;type=press_releases" class="<?php echo ($type == 'press_releases') ? "selected" : null; ?>">Press Releases</a>
                        <a href="/?s=<?php echo $_GET['s']; ?>&amp;lang=<?php echo ICL_LANGUAGE_CODE; ?>&amp;type=newsfeed" class="<?php echo ($type == 'newsfeed') ? "selected" : null; ?>">Newsfeed</a>
                    </nav>

                    <h1><?php echo count($posts_array)." ".$label." ".__(" results for the search, ", 'digital-river')."&#8220;".$_GET['s']; ?>&#8221;</h1>

                <?php if(isset($posts_array) && count($posts_array) > 0): ?>
                <section class="solution_results">

                    <div class="row detailed-link-wrapper">
                        <section class="col-md-7">

                            <?php foreach ($posts_array as $result) : ?>
                              
                                    <?php
                                    // switch ($result->post_type) :
                                    //     case 'press_release':
                                    //         $title = "Press Release";
                                    //         break;
                                    //     case 'post':
                                    //         $title = "Blog Post";
                                    //         break;
                                    //     case 'case-stories':
                                    //         $title = "Case Story";
                                    //         break;
                                    //     case 'white-papers':
                                    //         $title = "White Paper";
                                    //         break;
                                    //     case 'events':
                                    //         $title = $result->post_title;

                                    //         $external = get_field( "external_link", $result->ID );
                                    //         if($external){
                                    //             $link = get_field( "link_url", $result->ID );
                                    //         }

                                    //         break;
                                    // default:
                                    //         $title = $result->post_title;
                                    //         break;
                                    // endswitch;
                                    ?>

                                    <section class="solution detailed-link">
                                        <div class="text_container">
                                            <header class="title"><?php echo $result->post_title; ?></header>
                                            <p class="intro"><?php echo $result->content; ?></p>
                                        </div>
                                        <a href="<?php echo get_permalink($result->ID); ?>" class="arrow"><?php _e('Details', 'search'); ?></a>
                                    </section>
                            <?php endforeach; ?>
                        </section>

                        <section class="col-md-5 sidebar">
                            <?php foreach ($posts_array['solutions'] as $result) : ?>
                                    <section class="solution">
                                        <div class="text_container">
                                            <header class="title"><?php echo $result->post_title; ?></header>
                                            <p class="intro"><?php echo $result->content; ?></p>
                                        </div>
                                        <a href="<?php echo get_permalink($result->ID); ?>" class="arrow"><?php _e('Details', 'search'); ?></a>
                                    </section>
                            <?php endforeach; ?>
                        </section>



                    <div class="clear"></div>
                    </div>
                </section>
                <?php endif; ?>

    

            <div class="clear"></div>
            </div>
        <?php else : ?>
                <section class="no_results">
                    <header>No Results</header>
                    <p class="text">Sorry, we can't seem to find what you're looking for. Please modify your search and try again.</p>
                </section>
        <?php endif; ?>
    </section>

<?php get_footer(); ?>
