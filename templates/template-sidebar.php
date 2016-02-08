<?php
/**
 * Template Name: New Template With Sidebar
 */
?>
<?php get_header(); ?>
<?php get_template_part('masthead'); ?>

<section class="row2">

	<div class='span_8 temp last'>
    <?php the_content(); ?>
	</div>


    <?php
      $displaySidebar = get_field('sidebar_display');
      $sidebarSections = get_field('sidebar_options');
      $firstSidebarItem = true; 
    ?>
    <?php if( $displaySidebar[0] == 1): ?>
        <div class='sidebar span_4 last'>
            <div class="detailed-link">
              <?php foreach ($sidebarSections as $sidebarSection) : ?>
                    <?php if($sidebarSection['acf_fc_layout'] == "eyebrow") : ?>
                          <div class='eyebrow'><?php echo $sidebarSection['name']; ?></div>
                          <div class='clear'></div> 
                    <?php elseif($sidebarSection['acf_fc_layout'] == "section"): ?>
                            <div class='detailed-link <?php echo $firstSidebarItem == true ? " first " : ""; ?>'>
                                <div class='title'><?php echo $sidebarSection['title']; ?></div>
                                <?php echo $sidebarSection['copy']; ?>
                                <div class='clear'></div> 
                            </div>
                        <?php $firstSidebarItem = false; ?>
                    
                    <?php elseif($sidebarSection['acf_fc_layout'] == "accordion"): ?>
                          <div class="sidebar-item accordion">
                            <div class="title"><?php echo $sidebarSection['title']; ?></div>
                                <div class="rail_tabbed_content widget">
                                    <div class="bellow-title">
                                        <?php foreach ($sidebarSection['bellows'] as $key => $bellow): ?>
                                          <div class="tab">
                                            <div style="z-index: 1;" class="header">
                                                <?php echo $bellow['title']; ?> 
                                                <div class="arrow"></div>
                                            </div>
                                            <div style="display: none;" class="content">
                                                <?php echo $bellow['content']; ?> 
                                            </div>
                                          </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                    <?php endif; ?>

              <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?>
<div class='clear'></div>
</section>

<?php get_footer(); ?>