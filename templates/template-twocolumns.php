<?php
/**
 * Template Name: Template J 2 Columns
 */
?>
<?php get_header(); ?>
<?php get_template_part('masthead'); ?>


<style>
.row2 {
    margin: 0px auto;
    max-width: 1240px;
    padding: 0px 30px;
    box-sizing: border-box;
}


.row2 .span_1 {
    width: 4.85%;
}

.row2 .span_2 {
    width: 13.45%;
}

.row2 .span_3 {
    width: 22.05%;
}

.row2 .col-md-4 {
    width: 30.75%;
}

.row2 .span_5 {
    width: 39.45%;
}

.row2 .col-md-6 {
    width: 48%;
}

.row2 .span_7 {
    width: 56.75%;
}

.row2 .span_8 {
    width: 65.4%;
}

.row2 .span_9 {
    width: 74.05%;
}

.row2 .span_10 {
    width: 82.7%;
}

.row2 .span_11 {
    width: 91.35%;
}

.row2 .span_12 {
    width: 100%;
}



.rail, .content_container {
    background: #FFF;
}

.container {
    padding: 0;
}


#template_j.no-sidebar .main_content {
    width: inherit;
    margin-left: auto;
    margin-right: auto;
    float: none;
}

.section-wrapper{width:50%; float: left;}

#template_j h3.section_heading{
    font-family: "DIN Next W01 Medium";
}


.section {
    margin-bottom: 30px;
}

.resources-wrapper{
    overflow: hidden;
}

ul.bullet-list li{
    list-style-type: disc;
    margin-left: 15px;
    margin-bottom: 5px;
    margin-top: 2px;
}


@media handheld, only screen and (max-width: 1000px) {

    .row2 .span_1, .row2 .span_2, .row2 .span_3, .row2 .col-md-4, .row2 .span_5, .row2 .col-md-6, .row2 .span_7, .row2 .span_8, .row2 .span_9, .row2 .span_10, .row2 .span_11, .row2 .span_12{
        width: auto !important;
        float: none;
        margin-left: 0px;
        margin-right: 0px;
    }

}

</style>

<section id="template_j" class="content_container <?php if(!check_for_sidebar('template_j_right_sidebar')){echo " no-sidebar";} ?>">
        <?php $post = get_post(get_the_ID()); ?>
        <?php if ($post) : ?>
           <?php echo apply_filters('the_content', $post->post_content); ?></div>
        <?php endif; ?>


        <?php renderVideoSectionOnPage(get_the_ID()); ?>

        <?php initResourcesSection(); ?>
</section>

<?php get_footer(); ?>

<!--

<div class='section'>
<h2 class='eyebrow'>Overview</h2>
<div class='clear'></div>

<div class='col-md-6'>
Digital River’s Channel Lead Management solution is a global, where-to-buy solution that puts all the data you need right at your fingertips. Through tracking and analytics, you can capture insight into your customer’s behavior, manage your channel <a href="http://digitalriver.staging.wpengine.com/partners/">partners</a> and increase online revenue . . . all at the same time.
</div>

<div class='col-md-6 last'>
Digital River’s Channel Lead Management solution is a global, where-to-buy solution that puts all the data you need right at your fingertips. Through tracking and analytics, you can capture insight into your customer’s behavior, manage your channel <a href="http://digitalriver.staging.wpengine.com/partners/">partners</a> and increase online revenue . . . all at the same time.
</div>


</div>
<h2 class='eyebrow'>Solutions</h2>
<div class='clear'></div>
<div class='col-md-6'>
<div class='section'>
<h3 class='section_heading'>Real-Time Inventory</h3>
Access online inventory information and automatically replace “out of stock” messages with preferred reseller links.</div>

<div class='section'>
<h3 class='section_heading'>Competitive Market Analysis</h3>
Compare your product pricing with competitive products. Review pricing, price history, ratings and reviews, stock status and manage and enforce minimum advertised price (MAP) violations.</div>

<div class='section'>
<h3 class='section_heading'>Minimize Channel Conflict</h3>
List your trusted retail partners and their product information. You control rankings and what data to show, such as pricing, shipping and handling, rebates, stock status, a buy button and more.</div>

<div class='section'>
<h3 class='section_heading'>Close the Loop</h3>
Track shoppers after they have left your site and collect data about purchasing behavior. Where did they go? Did they buy? What did they buy? Knowing this information can dramatically affect your overall online and offline strategy—and your revenue.</div>

<div class='section'>
<h3 class='section_heading'>Geographical Heat Maps</h3>
View breakdown of purchasing information and trends by geographical region.</div>
</div>
<div class='col-md-6 last'>
<div class='section'>
<h3 class='section_heading'>Mobile</h3>
Mobile optimization ensures that customers can find where to buy your product while on the move.</div>

<div class='section'>
<h3 class='section_heading'>Online Data, Offline Sales</h3>
Allow customers to use a store locator to find brick-and-mortar stores that carry your products.</div>

<div class='section'>
<h3 class='section_heading'>Analytics</h3>
Measure campaign effectiveness and return on investment (ROI) across all channels.</div>

<div class='section'>
<h3 class='section_heading'>Track Public and Private Pricing Tiers</h3>
Protect your brand and product value by tightly monitoring how partners set prices relative to your MAP.</div>

<div class='section'>
<h3 class='section_heading'>Integrate with Social Media</h3>
Create buying opportunities on your Facebook and YouTube pages by integrating customer lifecycle management (CLM) with your social media sites.</div>

<div class='section'>
<h3 class='section_heading'>Global Solution</h3>
Multi-language and currency support for deployments around the world.</div>
</div>

-->