<?php
/**
 * Template Name: Template CBI 2
 */
?>
<?php get_header(); ?>
<?php get_template_part('masthead'); ?>



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
<div class="container">
<div class='row2 row'>
        <div class='col-md-12'>
            <div class='eyebrow'>Overview</div>
    </div>
    <div class="row">
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
</div>


<div class=" orange-bg">
<div class="container">  
<div class='row2 row'>
    <div class='col-md-2 cbiicon-wrapper'>
        <img src="<?php echo get_template_directory_uri().'/img/CBI-white.png' ?>"/>
    </div>
    <div class='col-md-10 last'>
    <p class='light white'>
Leverage Digital River’s global expertise and infrastructure to effectively support your expansion into new markets…and gain peace of mind that the complexities are being taken care of so that you can focus on what you do best.
</p>
    </div>
    <div class='clear'></div>
</div>
</div>
</div>
<div class='container'>
<div class='row2 cbi-wrapper row' >
    <div class="col-md-12">
            <h2 class='green-under-line'>Capabilities</h2>
    </div>    
 
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




</div>
        </div>
    <?php initResourcesSection(); ?>

<?php get_footer(); ?>