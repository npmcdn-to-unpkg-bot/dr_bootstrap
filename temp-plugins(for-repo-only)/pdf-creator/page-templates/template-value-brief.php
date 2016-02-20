<?php
/**
 * Template Name: Template Value Brief
 */
?>
<?php get_header(); ?>
<!-- For Print Pages to Appear -->
<?php if(isset($_GET['print'])): ?>
    <style>
      #global_header {display: none;}
      #global_footer {display: none;}
      .overlay-wrapper{display: none;}
    </style>
<?php endif; ?>




<?php $isPrint = isset($_GET['print'])?true:false; ?>
<?php $pages = (get_field('add_pages')); 

?>
<?php foreach ($pages as $key1 => $page) { ?>
<?php $rows = (get_field('row', $page['page']->ID)); 
?>

<!-- BEGIN PRINT BUTTON -->
<?php if (is_user_logged_in() == true){ ?>
  <a href="<?php echo get_page_link(); ?>?print">Print</a>
<?php } ?>
  



<!-- BEGIN CONTAINER -->
<div class="container value-brief">
  
  <?php foreach ($rows as $key2 => $row) { ?>

  <!-- BOOTSTRAP ROW -->
  <div class="row">

    <?php foreach ($row['columns'] as $key3 => $column) { ?>


    <!-- BOOTSTRAP COLUMN -->

    <?php if($column['column_type'] == "one-third-col"): ?>
    <div class="col-md-4">

    <?php elseif($column['column_type'] == "one-half-col"): ?>
    <div class="col-md-6">

    <?php elseif($column['column_type'] == "two-thirds-col"): ?>
    <div class="col-md-8">

    <?php elseif($column['column_type'] == "one-col"): ?>
    <div class="col-md-12">

    <?php else: ?>
    <div class="col-md-12">

    <?php endif; ?>


      <!-- BOOTSTRAP ROW TYPE -->
      <div class="<?php echo $row['row_type']; ?>">

        <?php if($key3 <= 2): ?>

            <?php if($column['breakout'] == "on"): ?>
            <div class="breakout">
            <?php endif;  ?>



            <?php foreach ($column['content'] as $key4 => $content) { ?>

            <?php if($content['acf_fc_layout'] == "heading_large"): ?>
            <h1 class="large-heading"><?php echo $content['heading_lg']; ?></h1>

            <?php elseif($content['acf_fc_layout'] == "heading_medium"): ?>
            
            <h1 class="medium-heading"><?php echo $content['heading_md']; ?></h1>

            <?php elseif($content['acf_fc_layout'] == "heading_small"): ?>
            <h3><?php echo $content['heading_sm']; ?></h3>

            <?php elseif($content['acf_fc_layout'] == "heading_underline"): ?>
            <h1 class="small-heading green-under-line"><?php echo $content['heading_ul']; ?></h1>

            <?php elseif($content['acf_fc_layout'] == "paragraph"): ?>
            <div class="wysiwyg-style"><?php echo $content['pg']; ?></div>

            <?php elseif($content['acf_fc_layout'] == "superscript"): ?>
            <sup class="solosup"><?php echo $content['sup']; ?></sup>

            <?php elseif($content['acf_fc_layout'] == "image"): ?>
            <img src="<?php echo $content['image_select']; ?>" />

        
            <?php else:  ?>

            <?php endif; ?>


            <?php }   ?>

            <?php if($column['breakout'] == "on"): ?>
            </div>
            <?php endif; ?>
            <!-- END BREAKOUT -->

        <?php endif; ?>


      </div>
      <!-- END ROW TYPE -->


    </div>
    <!-- END COLUMNS -->
    <?php } ?>

    





  </div> 
  <!-- END ROW -->
  <?php } ?>
<?php if(count($pages)-1 != $key1): ?>
<div class="row">
  <div class="dividerHTML"></div>
</div>
<?php else: ?>
  <?php endif; ?>

<?php if (isset($_GET['print'])): ?>

<?php if(count($pages)-1 != $key1): ?>
      <div class="print-footer">
        <div class="row">
          <div class="col-md-6">
            <?php echo '<img src="' . plugins_url( 'img/footer-logo.svg', dirname(__FILE__) ) . '" class="imgleft" > '; ?>

          </div>
          <div class="col-md-6">

            <?php $footerLink = (get_field('footer_url_link')); ?>

            <?php $footerURL = (get_field('footer_url')); ?>

              <h1><a href="<?php echo $footerLink ?>"><?php echo $footerURL ?></a></h1>

              <?php $footerTM = (get_field('footer_trademarks')); ?>

              <h2>&copy;<?php echo date("Y"); ?> Digital River, Inc. | <?php echo $footerTM ?></h2>
          </div>
        </div>
      </div>
<?php else: ?>




    <div class="row">
      <div class="col-md-12">
        <div class="dividerContainer">
            <div class="divider"></div>
        </div>
        <div class="col-md-6">
          <div class="row-four-footer">
            <h3 class="footerhd">About Digital River, Inc.</h3>
            <p><?php the_field('description', 'option'); ?></p>
          </div>
        </div>
        
        <div class="col-md-6">
          <div class="row-four-footer">
            <h3 class="footerhd"><?php the_field('tag_line', 'option'); ?></h3>

            <ul class="footerlist">

              <?php $contacts = get_field('contact_list', 'option'); ?>
              <?php foreach ($contacts as $key => $contact) { ?>
                    
              <li><?php echo $contact['contact_list_item'] ?></li>
              <?php } ?>

            </ul>

          </div>
        </div>
      </div>
    </div>

      <div class="print-footer">
        <div class="row">
          <div class="col-md-6">

            <?php echo '<img src="' . plugins_url( 'img/footer-logo.svg', dirname(__FILE__) ) . '" class="imgleft" > '; ?>

          </div>
          <div class="col-md-6">
             <h1><a href="<?php echo $footerLink ?>"><?php echo $footerURL ?></a></h1>
              
                <h2>&copy;<?php echo date("Y"); ?> Digital River, Inc. | <?php echo $footerTM ?> </h2>
                  
        </div>
        </div>
      </div>

    <?php endif; ?>

<?php endif; ?>





</div>
<!-- END CONTAINER -->


<?php } ?>

<div class="row">
  <div class="containerPrintButton">
    <?php if( get_field('upload_pdf') ): ?>
      <a class="printButton" href="<?php the_field('upload_pdf'); ?>">Export to PDF</a>
    <?php endif; ?>
  </div>

</div>


<?php get_footer(); ?>