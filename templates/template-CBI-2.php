<?php
/**
 * Template Name: Template CBI 2
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


.span_1, .span_2, .span_3, .col-md-4, .span_5, .col-md-6, .span_7, .span_8, .span_9, .span_10, .span_11 {
    margin-right: 3.8%;
    float: left;
    min-height: 1px;
}

.last {
    margin-right: 0px;
}

    .client-wrapper{
        max-width: 1220px;
        margin: 30px auto 50px;
        width: 100%;
        box-sizing: border-box; 
    }

    .left-box, .right-box{
        width: 50%;
        float: left;
    }


    .client-outer{
        width: 100%;
        padding: 20px 0 0 0;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        float: left;

    }

    .client-inner{
        width: 100%;       
        border: 1px solid #D2D3D6;
        height: 14.68em;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        position: relative;
    }

    .client-logo-wrapper{
        border-bottom: 1px solid #D2D3D6;
        padding: 10px 0;
       
    }

    .client-logo-wrapper img{
        height: 40px;
        float: right;
        padding: 0 10px;
        margin-right: 10px;
    }

    .client-logo-wrapper .header {
        font-size: 1.5em;
        color: #343438;
        margin: 11px 25px 0px;
        font-family: "DIN Next W01 Medium";
        padding-top: 0px !important;
        line-height: 1;
    }

    .copy{
        padding: 15px;
        font-family: "Arial"; color: #343438; padding-right: 15px;
         }

        .copy ul{

        }

    .copy ul li{margin:  0 0 10px;}



ul.bullet-list li{
    list-style-type: disc;
    margin-left: 15px;
    margin-bottom: 5px;
    margin-top: 12px;
}

.cbiicon-wrapper img{
    max-width: 110px;
    display: block;
    margin: 0 auto;
}

.col-md-6 .client-outer:first-child{
    padding-top: 0;
}


    .clear{clear:both;}

    @media (max-width: 1100px) {
        .client-inner{
            height: 15.625em;
        }
    }

    @media (max-width: 1000px) {
        .client-inner{
            height: 17.18em;
        }
    }

    @media (max-width: 1000px) {
        .client-inner{
            height: 22.43em;
        }
    }

    @media (max-width: 700px) {
        .cbi-wrapper .col-md-6{
            width:100%;
        }
        .client-inner{height: inherit;}


    }


</style>

	<div class='client-wrapper'>


    <?php 
    $leftBoxes = array();
    $rightBoxes = array();
    $leftBoxes[] = array(
            'header' => 'Merchant &amp; Seller of Record',
            'copy' => '<ul class="bullet-list">
                        <li>Digital River assumes all risk</li>
                        <li>Maintains banking and reseller relationships</li>
                        <li>Implements tax management, fraud & security management and legal compliance</li>
                        <li>Responsible for payment processing expenses</li>
                        </ul>',
            'image_src' => get_template_directory_uri().'/img/merchant-seller.png',
            'image_alt' => ''
                );

        $rightBoxes[] = array(
            'header' => 'Local Entities',
            'copy' => '<ul class="bullet-list">
                        <li>Instant global presence</li>
                        <li>Knowledge of customs and regulations</li>
                        <li>Responsible for all locally required legal, accounting and tax regulations</li>
                        <li>Offers local payments and localized shopping experience</li>
                        </ul>',
            'image_src' => get_template_directory_uri().'/img/Local-entities.png',
            'image_alt' => ''
                );

        $leftBoxes[] = array(
            'header' => 'Risk Management',
            'copy' => '<ul class="bullet-list">
                        <li>Alleviates responsibility</li>
                        <li>Manages fraud</li>
                        <li>In-house system with address validation</li>
                        <li>IT virtualization</li>
                        </ul>',
            'image_src' => get_template_directory_uri().'/img/risk-management.png',
            'image_alt' => ''
                );


        $rightBoxes[] = array(
            'header' => 'Financial Reconciliation',
            'copy' => '<ul class="bullet-list">
                        <li>Local payment options</li>
                        <li>Reconciles cash receipts from account</li>
                        <li>Resolves payment discrepancies</li>
                        <li>Responsible for legally required accounting filings</li>
                        </ul>',
             'image_src' => get_template_directory_uri().'/img/financial-reconciliation.png',
            'image_alt' => ''
                );

                $leftBoxes[] =  array(
            'header' => 'Tax Collection &amp Filing',
            'copy' => '<ul class="bullet-list">
                        <li>Tax calculations</li>
                        <li>Manages audit risk</li>
                        <li>Offshore tax structure</li>
                        <li>Completes returns preparation and filing</li>
                        </ul>
                        <!-- Link to Tax Solutions Video -->
                        ',
             'image_src' => get_template_directory_uri().'/img/tax-collection.png',
            'image_alt' => ''
                );

            $rightBoxes[] =  array(
            'header' => 'Foreign Exchange',
            'copy' => '<ul class="bullet-list">
                        <li>Protects revenue from variations in FX rates</li>
                        <li>Minimizes risk</li>
                        <li>Simplifies back-office management</li>
                        <li>Eliminates the need for banks around the world</li>
                        </ul>
                        ',
             'image_src' => get_template_directory_uri().'/img/foreign-exchange.png',
            'image_alt' => ''
                );


            $leftBoxes[] =  array(
            'header' => 'Legal Compliance',
            'copy' => '<ul class="bullet-list">
                        <li>Monitors transactions and flags potential fraud</li>
                        <li>Tracks products restricted in markets that you want to sell in</li>
                        <li>Screens against government blocks and denied party lists</li>
                        <li>Maintains new compliance regulations, for example PCI, SOX, SSAE16 and WEEE</li>
                        </ul>
                        ',
            'image_src' => get_template_directory_uri().'/img/legal-compliance.png',
            'image_alt' => ''
                );


            $rightBoxes[] =  array(
            'header' => 'Payments',
            'copy' => '<ul class="bullet-list">
                        <li>Industry leading uptime and platform stability</li>
                        <li>Multi-data center redundancies to protect from traffic flow issues</li>
                        <li>Low cost transaction processing</li>
                        <li>Intelligent routing to improve authorization rates</li>
                        </ul>
                        ',
           'image_src' => get_template_directory_uri().'/img/payments-cbi.png',
            'image_alt' => ''
                );
    
  
/* $leftBoxes[] = [
            'header' => 'Order Management',
            'copy' => '
                <div class="subsection">
                    <div class="subheading">Physical</div>
                    <ul class="bullet-list">
                        <li>Global fulfillers and carriers (including cross-border infrastructure)</li>
                        <li>Integration with existing supply chain</li>
                        <li>Multi-source framework</li>
                    </ul>
                </div>
                <div class="subsection">
                    <div class="subheading">Digital</div>
                    <ul class="bullet-list">
                        <li>Subscription-based billing</li>
                        <li>Post transaction analytics</li>
                        <li>Entitlement controls</li>
                        <li>Proactive payment refunds to prevent chargebacks</li>
                    </ul>
                </div>
                        ',
            'image_src' => './legal-compliance.png',
            'image_alt' => ''
                ];
  */
$leftBoxes[] = array(
            'header' => 'Physical Fulfillment',
            'copy' => '

                    <ul class="bullet-list">
                        <li>Global fulfillers and carriers (including cross-border infrastructure)</li>
                        <li>Integration with existing supply chain</li>
                        <li>Multi-source framework</li>
                    </ul>
               
                        ',
            'image_src' => get_template_directory_uri().'/img/physical-full.png',
            'image_alt' => ''
                );

                $rightBoxes[] = array(
            'header' => 'Digital Order Management',
            'copy' => '
                    <ul class="bullet-list">
                        <li>Subscription-based billing</li>
                        <li>Post transaction analytics</li>
                        <li>Entitlement controls</li>
                        <li>Proactive payment refunds to prevent chargebacks</li>
                    </ul>
        
                        ',
            'image_src' => get_template_directory_uri().'/img/order-management.png',
            'image_alt' => ''
                );
    
?>
<div class='row2'>
            <div class='eyebrow'>Overview</div>
        <div class='clear'></div>
    <div class='col-md-6'>

        <div class='section'>
            <p>
            Digital River Commerce Business Infrastructure™ (CBI) manages the complexities of ecommerce, empowering you to sell your products globally, expand rapidly, lower your total cost of ownership and enable the shopper journey through integrated services and technologies. What makes our offering unique is our full solution: reseller business model; robust, flexible cloud-based SaaS platform; and comprehensive business operation support. Your business requires a merchant account if you accept credit or debit card transactions.

            </p>
        </div>
    </div>
    <div class='col-md-6 last'>
        <div class='section'>
            <p>

At Digital River, we use a Merchant and Seller of Record (MOR/SOR) business model to help alleviate multiple dimensions of risk, simplify business operations, increase speed to market and reduce costs for your business. Our full-service approach to ecommerce includes end-to-end support, such as payment processing, order management, customer service, fraud protection, tax management, financial reconciliation and other value-added services.

            </p>
        </div>
    </div>
</div>
</div>


<div class='clear'></div>
<div style='background:#ff5b00; margin:20px 0; padding:40px 0;'>
<div class='row2'>
    <div class='span_2 cbiicon-wrapper'>
        <img src="<?php echo get_template_directory_uri().'/img/CBI-white.png' ?>"/>
    </div>
    <div class='span_10 last'>
    <p class='light white' style='font-size:1.5em;'>
Leverage Digital River’s global expertise and infrastructure to effectively support your expansion into new markets…and gain peace of mind that the complexities are being taken care of so that you can focus on what you do best.
</p>
    </div>
    <div class='clear'></div>
</div>
</div>

<div class='row2 cbi-wrapper' >
            <div class='eyebrow'>Capabilities</div>
        <div class='clear'></div>
    <div class="col-md-6">



<?php



    foreach($leftBoxes as $key => $box){

    ?>
            <div class="client-outer ">        
            <div class="client-inner ">
            	<div class="client-logo-wrapper">
                    <img alt='<?php echo $box['image_alt']; ?>' class="client-logo" src="<?php echo $box['image_src']; ?>" />
                <div class="header"><?php echo $box['header']; ?></div>
                <div class="clear"></div>

                </div>
                <div class="copy">
                   <?php echo $box['copy']; ?>
                </div>
            </div>
        </div>

    <?php } ?>
    <div class='clear'></div>
</div>

<div class='col-md-6 last'>

    <?php



    foreach($rightBoxes as $key => $box){

    ?>
            <div class="client-outer ">        
            <div class="client-inner ">
                <div class="client-logo-wrapper">
                    <img alt='<?php echo $box['image_alt']; ?>' class="client-logo" src="<?php echo $box['image_src']; ?>" />
                <div class="header"><?php echo $box['header']; ?></div>
                <div class="clear"></div>

                </div>
                <div class="copy">
                   <?php echo $box['copy']; ?>
                </div>
            </div>
        </div>

    <?php } ?>
    <div class='clear'></div>

</div>



<div class="clear"></div>

</div>

    <?php initResourcesSection(); ?>

<?php get_footer(); ?>