<?php
/**
 * 404 Page for catching bad URLs
 */
get_header(); 

$page = get_page_by_path('page-not-found');  
if( !is_null($page) ) : 
$page_content = apply_filters('the_content', $page->post_content );
?> 

<style type='text/css'>
	
	#template_a .page_title{font-size: 4em; color: #009AD7; background:#EDEDED; padding:30px 0;}
	#template_a .widget_container {border:none;}
	#template_a p{padding: 10px 0;}
	#template_a .widget_container{ margin:0; padding: 35px 0 0;}
</style>

<div id="template_a">

	
      		
        
        			<div class="page_title"><div class='row'><?php echo $page->post_title; ?></div></div>
      
     

    <div class="background">
      <div class="container">
        <!-- Widget -->
        <?php if( !is_null($page->post_content) ) : ?>
          <section class="widget_container">
            <div class="row">
              <div class="span_11">
                <?php $page_content; ?>
              </div>
            </div>
            <div class="clear"></div>
          </section>
        <?php endif; ?>
      </div>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>
<?php endif; ?>
<?php get_footer(); ?>
