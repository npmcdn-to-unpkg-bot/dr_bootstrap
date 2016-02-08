<?php
/**
 * Template Name: Template A New
 */
?>
<?php get_header(); ?>
  <div id="template_a">

    <?php get_template_part('masthead'); ?>

      <div class="container">
        <!-- Widget -->
        <?php if (get_the_content()) : ?>

            <div class="row">
              <section class="widget_container">
                  <div class="span_12 last">
                    <?php the_content(); ?>
                  </div>
                  <div class="clear"></div>
              </section>
            </div>
            
        <?php endif; ?>
        <div class="row">
        <?php foreach(get_field('column') as $key=>$column) : ?>

            <div class='span_4 col <?php if( count(get_field('column')) == ($key+1) ){ echo " last"; } ?>'>
                <div class="widget featured_content">
                    <?php if ($column['image']) : ?>
                        <a href="<?php echo $column['link']; ?>" class="image">
                            <?php if(!$column['cat_name']): ?>
                            <h3>
                            <?php endif; ?>
                              <img alt='<?php echo $column['image']['alt']; ?>' src="<?php echo $column['image']['url']; ?>">
                            <?php if(!$column['cat_name']): ?>
                            </h3>
                            <?php endif; ?>
                        </a>
                    <?php endif; ?>

 
                    <div class="content">
                    <?php if($column['cat_name']): ?>
                        <h3><?php echo $column['cat_name']; ?></h3>
                    <?php endif; ?>
                        <div class="body">
                            <p><strong><?php echo $column['main_heading']; ?></strong></p>
                            <p><?php echo $column['description']; ?></p>
                        </div>
                    </div>
                    <a class='button' href='<?php echo $column['link']; ?>'><?php echo $column['link_title'] ?></a>               
                </div>
            </div>
          
          <?php endforeach; ?>
          <div class='clear'></div>
      </div>
    </div>

  </div>

<?php get_footer(); ?>