<?php
/**
 * Template Name: CAAS Template
 */
?>
<?php get_header(); ?>

<div class="payments-wrapper">


<!-- START MAIN HEAD SECTION -->
<div class="heroBackdrop">
	<div class="container" id="intro">
		<div class="row" style="padding-top:30px; padding-bottom:30px;">
			<div class="col-xs-12">
				<h1 class="eyebrow white"><?php echo get_field('headTitle');?></h1>
				<p class="white"><?php echo get_field('headIntro');?></p>
			</div>
		</div>
	</div>
	<div class="heroTable">
		<div class="heroImgPos" id="desktop">
			<div class="heroImgWrap">
				<img src="/wp-content/uploads/2016/01/desktop.png" alt="desktop" />
				<img src="/wp-content/uploads/2016/01/desktop-animation2.gif" alt="desktop website" />
			</div>
		</div>
		<div class="heroImgPos" id="tablet">
			<div class="heroImgWrap">
				<img src="/wp-content/uploads/2016/01/tablet-animation2.gif" alt="tablet website" />
				<img src="/wp-content/uploads/2016/01/tablet2.png" alt="tablet" />
			</div>
		</div>
		<div class="heroImgPos" id="keyboard">
			<div class="heroImgWrap">
				<img src="/wp-content/uploads/2016/01/keyboard-mouse-clips.png" alt="keyboard" />
			</div>
		</div>
		<div class="heroImgPos" id="books">
			<div class="heroImgWrap">
				<img src="/wp-content/uploads/2016/01/books.png" alt="books" />
			</div>
		</div>
	</div>
</div>
<!-- //END MAIN HEAD SECTION -->


<!-- START SUB HEAD SECTION -->
<div class="gray-map-bg" style="background-color:#646469;">
	<div class="container">
		<div class="row" style="text-align:center;">
			<div class="col-xs-12" style="padding-top:30px; padding-bottom:30px;">
				<h2 class="med heading white"><?php echo get_field('subHeadTitle');?></h2>
				<div class="section">
					<p class="white"><?php echo get_field('subHeadIntro');?></p>
				</div>
				<a href="<?php echo $subHeadCTAlink;?>" class="button opposite btn-white"><?php echo get_field('subHeadCTAtitle');?></a>
			</div>
		</div>
	</div>
</div>
<!-- //END SUB HEAD SECTION -->


<!-- START HELP YOUR BUSINESS SECTION -->
<div id="helpYourBusiness">
	<div class="container" style="padding-top:30px; padding-bottom:30px;">
		<div class="row">
			<div class="col-xs-12">
				<h2 class="med heading"><?php echo get_field('helpYourBusinessTitle');?></h2>
			</div>
		</div>
		<?php foreach(get_field('helpyourbusiness') as $key => $item) : ?>
		<?php if ($key % 2 == 0) { ?><div class="row"><?php } ?>
			<div class="col-md-6 slideIn">
				<div class="row">
					<div class="col-xs-2">
						<div class="iconBlock">
							<?php echo $item['svg'];?>
						</div>
					</div>
					<div class="col-xs-10">
						<h4><?php echo $item['title'];?></h4>
						<p><?php echo $item['description'];?></p>
					</div>
				</div>
			</div>
		<?php if ($key % 2 != 0 || $key == count($helpYourBusiness)-1) { ?></div><?php } ?>
		<?php endforeach; ?>
	</div>
</div>
<!-- //END HELP YOUR BUSINESS SECTION -->


<!-- START CAAS BUBBLE SECTION -->
<!--[if IE]>
<style>.fadeScale{opacity:1;transform:scale(1);}</style>
<![endif]-->
<div id="caas" style="background-color:#fff;">
	<div id="caasContent" class="row2" style="text-align:center;">
		<div id="greyBar"></div>
		<div class="span_12 last">
			<h2 class="med gray heading"><?php echo get_field('caasTitle');?></h2>
			<?php foreach(get_field('service') as $lvl1) : ?>
			<div id="<?php echo $lvl1['id'];?>" class="serviceWrap _<?php echo count($lvl1['services']);?>">
				<div class="title">
					<?php echo $lvl1['svg'];?>
					<h3><?php echo $lvl1['title'];?></h3>
				</div>
				<div class="services">
					<figure class="serviceWindow" style="background-image:url(<?php echo $lvl1['image'];?>);">
						<div class="line1 left"></div>
						<div class="line1 right"></div>
						<div class="line2 left"></div>
						<div class="line2 right"></div>
						<div class="line3 left"></div>
						<div class="line3 right"></div>
						<div class="line4 left"></div>
						<div class="line4 right"></div>
						<div class="line5 left"></div>
						<div class="line5 right"></div>
						<div class="line6 left"></div>
						<div class="line6 right"></div>
						<div class="line7 left"></div>
						<div class="line7 right"></div>
						<div class="line6 left"></div>
						<div class="line6 right"></div>
						<div class="line5 left"></div>
						<div class="line5 right"></div>
						<div class="line4 left"></div>
						<div class="line4 right"></div>
						<div class="line3 left"></div>
						<div class="line3 right"></div>
						<div class="line2 left"></div>
						<div class="line2 right"></div>
						<div class="line1 left"></div>
						<div class="line1 right"></div>
						<div class="blurbWrapper"></div>
					</figure>
					<?php foreach($lvl1['services'] as $lvl2) : ?>
					<div class="service fadeScale" id="<?php echo $lvl2['id'];?>">
						<span class="bubble <?php if ($lvl2['reverse'] == 'true') { echo 'reverse'; };?>" >
							<span class="close">&times;</span>
							<span class="icon">
								<?php echo $lvl2['svg'];?>
							</span>
							<div class="blurb">
								<h4><?php echo $lvl2['title'];?></h4>
								<p><?php echo $lvl2['description'];?></p>
								<?php if ( !empty($lvl2['link']) ) : ?>
								     <a herf="<?php echo $lvl2['link'];?>" class="blurb-cta">Learn More</a>
								<?php endif; ?>
							</div>
							<span class="serviceType"><?php echo $lvl2['title'];?></span>
						</span>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
	<div id="caasNav" class="cf">
		<a id="otherServices" class="caasNavItem">
			<svg version="1.1" id="otherServicesSVGnav" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="294.9 -159 422.2 333" style="enable-background:new 294.9 -159 422.2 333;" xml:space="preserve"><path d="M506,171.5c-0.9,0-1.6-0.4-2.1-1.2l-206-323c-0.5-0.8-0.5-1.7-0.1-2.5c0.4-0.8,1.3-1.3,2.2-1.3h412c0.9,0,1.8,0.5,2.2,1.3 c0.4,0.8,0.4,1.8-0.1,2.5l-206,323C507.6,171.1,506.9,171.5,506,171.5z"/></svg>
			View other services
		</a>
		<?php foreach(get_field('service') as $lvl1) : ?>
		<a href="#<?php echo $lvl1['id'];?>" class="caasNavItem" id="<?php echo $lvl1['id'];?>Nav">
			<?php echo $lvl1['svg'];?>
			<?php echo substr($lvl1['title'], 0, 21);?>
		</a>
		<?php endforeach; ?>
	</div>
</div>
<!-- END CAAS BUBBLE SECTION -->


</div>

<?php get_footer(); ?>