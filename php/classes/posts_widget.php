<?php

class Posts_Widget {

    protected static $dates = array();
    protected static $result_limit = array(
        'list' => -1,
        'tabs' => -1,
        'box' => -1,
    );

    /**
     * Renders the posts widget
     *
     * @param  string $base_dir
     * @param  string $location
     * @param  string $layout
     * @return string
     */
    public static function render($base_dir, $location, $layout, $content) {
        $template_path = vsprintf("%s/posts/%s/%s.php", array($base_dir, $location, $layout));

        // Go to parent and see if a template exists
        if (!file_exists($template_path)) {
            $template_path = vsprintf("%s/posts/%s.php", array($base_dir, $layout));
        }

        // Check if template exists, if not bail early
        if (!file_exists($template_path)) {
            return (DEBUG) ? vsprintf("Layout '%s' doesn't exist.", array($layout)) : '';
        }

        // Render template
        ob_start();
        // Don't get posts if usings tabs, use different way
        extract($content);
        $posts = ($content['layout'] === 'tabs') ? self::get_tab_posts($content) : self::get_posts($content);
        include $template_path;
        $view = ob_get_contents();
        ob_end_clean();
        return $view;
    }

    /**
     * Generates the tabs for posts
     *
     * @param  array $content
     * @return array
     */
    public static function get_tab_posts($content) {
        // Set up date filter
        self::date_range($content['from_date'], $content['to_date']);

        // Set up results array
        $results = array(
            'title' => '{Needs to be changed}',
            'tabs' => array(),
        );

        // Get posts
        foreach ($content['categories'] as $cat_id) {
            // If parent skip
            if (self::is_parent($cat_id)) {
                continue;
            }

            // Get posts
            $query_results = query_posts(array(
                'cat' => $cat_id,
                'orderby' => 'date',
                'order' => 'desc',
                'posts_per_page' => ($content['posts_number'] === 'All') ? self::$result_limit[$content['layout']] : 1,
            ));

            // Remove filter
            wp_reset_query();
            remove_filter('posts_where', array('Posts_Widget', 'date_filter'));

            // Get custom fields
            $cat_name = get_cat_name($cat_id);
            $results['tabs'][$cat_name] = array();
            foreach ($query_results as $result) {
                $result->fields = (object)get_fields($result->ID);
                $results['tabs'][$cat_name][] = $result;
            }
        }

        return $results;
    }

    /**
     * Find all of the required posts
     *
     * @param  array $content
     * @return array
     */
    public static function get_posts($content) {
        // Set up date filter
        self::date_range($content['from_date'], $content['to_date']);

        // Query parameters
        $params = array(
            'post_status' => 'future, publish',
            'cat' => implode(',', $content['categories']),
            'orderby' => 'date',
            'order' => 'desc',
            'posts_per_page' => ($content['posts_number'] === 'All') ? self::$result_limit[$content['layout']] : 1,
        );

        // Get Posts
        $query_results = query_posts($params);

        // Remove filters and parameters to stop it from messing with our queries
        wp_reset_query();
        remove_filter('posts_where', array('Posts_Widget', 'date_filter'));

        // Get custom fields for each post and filter
        $results = array();
        if (isset($content['filter_by']) && $content['filter_by'] === 'category') {
            foreach ($query_results as $result) {
                // Gets the posts categories
                foreach (get_the_category($result->ID) as $cat) {
                    $result->fields = (object)get_fields($result->ID);
                    $results[$cat->cat_name][] = $result;
                }
            }
        } else {
            foreach ($query_results as $result) {
                $year = mysql2date("Y", $result->post_date_gmt);
                $result->fields = (object)get_fields($result->ID);
                $results[$year][] = $result;
            }
        }

        return $results;
    }

    /**
     * Filters by date
     *
     * @param  integer $start_date
     * @param  integer $end_date
     * @return string
     */
    public static function date_filter($where = '') {
        // Build where statement
        $where .= vsprintf(" AND post_date >= '%s' AND post_date <= '%s'", array(
            date('Y-m-d', self::$dates['from_date']),
            date('Y-m-d', self::$dates['to_date']),
        ));

        // Reset dates
        self::$dates = array();

        return $where;
    }

    /**
     * Checks if a category is a parent
     *
     * @param  integer  $id
     * @return boolean
     */
    protected static function is_parent($id) {
        $cat = get_category($id);
        return ($cat->category_parent == 0) ? true : false;
    }

    /**
     * Adds filter to only get posts in a date range
     *
     * @param  string $from_date
     * @param  string $to_date
     * @return void
     */
    protected static function date_range($from_date, $to_date) {
        if ($from_date || $to_date) {
            // Adjusts for jQuery's milliseconds
            self::$dates['from_date'] = ($from_date) ? $from_date / 1000 : 0;
            // If no end date is set, the end date is set to tomorrow
            self::$dates['to_date'] = ($to_date) ? $to_date / 1000 : time() + 86400;
            // Add filter
            add_filter('posts_where', array('Posts_Widget', 'date_filter'));
        }
    }
}
