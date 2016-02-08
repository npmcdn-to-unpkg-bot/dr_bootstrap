<div class="posts widget row">
    <?php
    /**
     * This is a more complex widget and the templates need to be handled a little differently
     */
    echo Posts_Widget::render(dirname(__FILE__), $args['id'], $widget['layout'], $widget);
    ?>
    <div class="clear"></div>
</div>
