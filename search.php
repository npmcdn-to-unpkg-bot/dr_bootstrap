<?php
/**
 * Search Page Template
 */
get_header();

// Gets solutions parent page, so we can get the ID
$solutions_parent    = get_field('solution_parent_page', 'option');
$our_expertise_types = array('events', 'press_release', 'media_coverage');
$blog_posts = array('post');




$areas = array($solutions_parent->ID => 'solutions');

if(isset($_GET['type'])){
    $type = strtolower($_GET['type']);
}else{
    if(isset($_GET['post_type'])){
        $type = strtolower($_GET['post_type']);
    }else{
        $type = null;
    }
}


global $wpdb;

if($type == "resources"):

    $search = get_search_query();
    $search_array = explode(" ", $search);
//fix
    $search_query_arg = "";
    foreach($search_array as $search_arg):
        $search_query_arg .= " OR LOWER(".$wpdb->postmeta.".meta_value) LIKE '%".strtolower($search_arg)."%' OR  ( LOWER(".$wpdb->posts.".post_title) LIKE '%".strtolower($search_arg)."%' AND ".$wpdb->posts."post_type = 'marketing_materials' ";
    endforeach;

    $sql = 'SELECT '.$wpdb->postmeta.'.meta_value, '.$wpdb->posts.'.ID, '.$wpdb->posts.'.post_title  FROM '.$wpdb->postmeta.' INNER JOIN '.$wpdb->posts.' ON '.$wpdb->postmeta.'.post_id='.$wpdb->posts.'.ID WHERE meta_key = "description"'.$search_query_arg;
    $results = $wpdb->get_results( $sql , OBJECT );

    foreach($results as $key => $result):
        $posts_array[] = (object) array(
            'post_title' => $result->post_title,
            'content' => $result->meta_value,
            'ID' => $result->ID
        );
    endforeach;

else:

    $blog_array = array();
    $posts_array = array();
    $numOfBlogPosts = 3;
    $blogCount = 0;
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
        }else if (in_array($post->post_type, $blog_posts)) {
            if($blogCount < $numOfBlogPosts):
                $blog_array[] = $post;
                $blogCount++;
            endif;
        } else {
            $posts_array['others'][] = $post;
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


endif;





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
        text-decoration: none;
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

    .detailed-link-wrapper .detailed-link:first-child{
        border-top: 1px solid #8F9094;
    }

    .detailed-link-wrapper{
        margin-top: 5px;
    }

    .sidebar{
        margin: 0;
    }

    .sidebar .eyebrow{
        float: left;
    }

    .solution{
        display: inline-block;
    }

    .view-all{
        display: inline-block;
        margin-top: 7px;
        float: left;
    }


</style>



    <section id="search_results">
        <div class="container">

        <?php get_search_form(true); ?>

        <nav class="type">
            <a href="/?s=<?php echo $_GET['s']; ?>&amp;lang=<?php echo ICL_LANGUAGE_CODE; ?>&amp;type=pages" class="<?php echo ($type == 'pages' || $type == null) ? "selected" : null; ?>">Pages</a>
            <a href="/?s=<?php echo $_GET['s']; ?>&amp;lang=<?php echo ICL_LANGUAGE_CODE; ?>&amp;type=resources" class="<?php echo ($type == 'resources') ? "selected" : null; ?>">Resources</a>
            <a href="/?s=<?php echo $_GET['s']; ?>&amp;lang=<?php echo ICL_LANGUAGE_CODE; ?>&amp;type=press_releases" class="<?php echo ($type == 'press_releases') ? "selected" : null; ?>">Press Releases</a>
            <a href="/?s=<?php echo $_GET['s']; ?>&amp;lang=<?php echo ICL_LANGUAGE_CODE; ?>&amp;type=newsfeed" class="<?php echo ($type == 'newsfeed') ? "selected" : null; ?>">Newsfeed</a>
        </nav>

        <h1>
            <?php 
            if($type == 'newsfeed'):
                $searchResultCount = count($posts_array).__(" Newsfeed ", "digital-river").__(" results", "digital-river").__(" for the search, ", 'digital-river')."&#8220;".$_GET['s']."&#8221;";
            elseif($type == 'press_releases'):
                $searchResultCount = count($posts_array).__(" Press Releases ", "digital-river").__("found for the search, ", 'digital-river')."&#8220;".$_GET['s']."&#8221;";
            elseif($type == 'resources'):
                $searchResultCount = count($posts_array).__(" Resources ", "digital-river").__("found for the search, ", 'digital-river')."&#8220;".$_GET['s']."&#8221;";
            else:
                $searchResultCount = count($posts_array).__(" Pages ", "digital-river").__("found for the search, ", 'digital-river')."&#8220;".$_GET['s']."&#8221;";
            endif;
            echo $searchResultCount;
            ?>
        </h1>
        <?php
        if (function_exists('relevanssi_didyoumean')) {
            relevanssi_didyoumean(get_search_query(), "<p>Did you mean: ", "</p>", 5);
        }
        ?>

            <?php if (have_posts()) : ?>
                <?php if(isset($posts_array) && count($posts_array) > 0): ?>
                <section class="solution_results">
                    <div class="row detailed-link-wrapper">
                        <section class="col-md-7">

                                <?php
                                    $results_count = count($posts_array);
                                    $results_per_page = 5;
                                    $page = isset($_GET['page'])?$_GET['page']:1;
                                    if($page == 1){
                                        $start = 0;
                                    }else{
                                        $start = ($page-1) * $results_per_page;
                                    }
                                    $end = $page * $results_per_page;
                                    $num_of_pages = ceil($results_count / $results_per_page);
                                ?>

                                <?php
                                    //printing posts
                                    if($results_count > $start):
                                        for($i = 0; $i < $results_count; $i++):
                                            if($i >= $start):
                                                if($i >= $end) break;
                                                ?>
                                                    <section class="solution detailed-link">
                                                        <div class="text_container">
                                                            <header class="title"><?php echo $posts_array[$i]->post_title; ?></header>
                                                            <p class="intro"><?php echo $posts_array[$i]->content; ?></p>
                                                        </div>
                                                        <a href="<?php echo get_permalink($posts_array[$i]->ID); ?>" class="arrow"><?php _e('Details', 'search'); ?></a>
                                                    </section>
                                                <?php
                                            endif;
                                        endfor;
                                    else:
                                        for($i = 0; $i <= $end; $i++):
                                            ?>
                                                <section class="solution detailed-link">
                                                    <div class="text_container">
                                                        <header class="title"><?php echo $posts_array[$i]->post_title; ?></header>
                                                        <p class="intro"><?php echo $posts_array[$i]->content; ?></p>
                                                    </div>
                                                    <a href="<?php echo get_permalink($posts_array[$i]->ID); ?>" class="arrow"><?php _e('Details', 'search'); ?></a>
                                                </section>
                                            <?php
                                        endfor;
                                    endif;
                             ?>
                                <nav>
                                    <ul class="pagination">
                                        <?php if($page != 1): ?>
                                            <li>
                                              <a href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                              </a>
                                            </li>
                                        <?php endif; ?>
   
                                        <?php
                                        //pagination
                                        for($i = 1;  $i <= $num_of_pages; $i++):
                                            if($i == $page){
                                                $selected = true;
                                            }else{
                                                $selected = false;
                                            }
                                            ?>
                                            <li class="<?php echo ($selected == true)?" active ":null; ?>"><a href="/?s=<?php echo $_GET['s']; ?>&amp;lang=<?php echo ICL_LANGUAGE_CODE; ?>&amp;page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                                        <?php endfor; ?>

                                        <?php if($page != $num_of_pages): ?>
                                             <li>
                                              <a href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                              </a>
                                            </li>
                                        <?php endif; ?>
                                    </ul>
                                </nav>
                        </section>
                        <section class="col-md-5 ">
                            <div class="sidebar">
                                <h2 class="eyebrow">Related Blog Posts</h2>
                                <a href="#" class="brackets view-all">View All Blog Posts</a>
                                <?php foreach ($blog_array as $result) : ?>
                                    <section class="solution">
                                        <div class="text_container">
                                            <header class="title"><?php echo $result->post_title; ?></header>
                                            <p class="intro"><?php echo $result->content; ?></p>
                                        </div>
                                        <a href="<?php echo get_permalink($result->ID); ?>" class="arrow"><?php _e('Details', 'search'); ?></a>
                                    </section>
                                <?php endforeach; ?>
                            </div>
                        </section>
                    <div class="clear"></div>
                    </div>
                </section>
                <?php endif; ?>

    

            <div class="clear"></div>
            </div>
        <?php else : ?>
                <section class="no_results">
                    <p class="text">Sorry, we can't seem to find what you're looking for. Please modify your search and try again.</p>
                </section>
        <?php endif; ?>
    </section>

<?php get_footer(); ?>
