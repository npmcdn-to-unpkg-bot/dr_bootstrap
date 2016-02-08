<?php
/**
 * Template Name: Template resources
 */
?>
<?php get_header(); ?>
<?php get_template_part('masthead'); ?>


<section class="grid_wrapper">
			<div class="grid">
            
             <?php foreach(get_field('grid_box') as $grid_box) : ?>

				<div class="<?php echo $grid_box['width']; ?>">
                
                <?php 
					$num_of_boxes = count($grid_box['box']);
					 
					if($num_of_boxes >= 3){
						$boxCount = 3;
						$boxClass = "third";
					}else if($num_of_boxes == 2){
						$boxCount = 2;
						$boxClass = "half";
					}else{
						$boxCount = 1;
						$boxClass = "";
					}
					$count = 0;
					
				 ?>
                
					<?php foreach($grid_box['box'] as $box) : ?>
                 
                        <?php if($count <= 3) : ?>
                       
                        <figure class="<?php echo $box['effect'] . " " . $boxClass; ?>" style="background:<?php echo $box['color'] ?>" >
                            <img src="<?php echo $box['image']['url']; ?>" alt="<?php echo $box['image']['alt']; ?>" />
                            <figcaption>
                                <h2><span><?php echo $box['heading']; ?><span></h2>
                                <p><?php echo $box['copy']; ?></p>
                                
                                <?php $link = ($box['external_link'])?: $box['link']; ?>
                                <a target="<?php echo $box['target'] ?>" href="<?php echo $link; ?>"><?php echo $box['link_text']; ?></a>
                            </figcaption>
                        </figure>
                        <?php $count++; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
				</div>
                
                <?php endforeach; ?>
               
             <div class="clear"></div>
			</div> <!-- /grid -->

</section><!-- /container -->

<section class="resource-wrapper">

<div class="resource-links">
	<div class="left-side">
		<div class="header"><?php _e( 'Thought Leadership', 'digital-river' ); ?></div>
		<ul class="three-links">
			<!-- What to do with these links for translated content -->
			<li><?php icl_link_to_element(8137,'page',__('Commerce', 'digital-river' )); ?></li>
			<!--<li><?php icl_link_to_element(8137,'page',__('Payments', 'digital-river' )); ?></li>-->
			<!--<li><?php icl_link_to_element(8137,'page',__('Marketing', 'digital-river' )); ?></li>-->
			<li><?php icl_link_to_element(7380,'page',__('Global Markets', 'digital-river' )); ?></li>
		</ul>
		<ul class="three-links">
			<li><?php icl_link_to_element(957,'page',__('Client Stories', 'digital-river' )); ?></li>
			<li><?php icl_link_to_element(535,'page',__('Events &amp; Webinars', 'digital-river' )); ?></li>
			<li><?php icl_link_to_element(417,'page',__('Blog', 'digital-river' )); ?></li>
		</ul>
	</div>
	<div class="right-side">
		<div class="header"><?php _e( 'Developers Resources', 'digital-river' ); ?></div>
		<ul class="three-links">
			<li><a href="https://developers.digitalriver.com/user"><?php _e( 'Developers Portal', 'digital-river' ); ?></a></li>
			<li><?php icl_link_to_element(1043,'page',__('Demos', 'digital-river' )); ?></li>
			<li><?php icl_link_to_element(2513,'page',__('Developers Toolkits', 'digital-river' )); ?></li>
		</ul>
	</div>
	<div class="clear"></div>
</div>
</section><!-- /resource-wrapper -->

<?php get_footer(); ?>
