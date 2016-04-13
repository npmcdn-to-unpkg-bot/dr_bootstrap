<?php
/**
 * Template Name: Template NEW Payments
 */
?>
<?php get_header(); ?>


<style>
	.resources-wrapper{overflow: hidden;}
</style>


<script>

jQuery(document).ready(function($){
 
	$("input").blur(function() {
	  if($(this).val()) {
	    $(this).addClass("blur");
	  } else {
	    $(this).siblings("label").show();
	  }
	});

	$("select").blur(function() {
	if($(this).val()) {
	  $(this).addClass("blur");
	  }
	});

	$("textarea").blur(function() {
	if($(this).val()) {
	  $(this).addClass("blur");
	  } else {
	      $(this).siblings("label").show();
	    }
	});

	$("input").on("keypress", function() {
	  if($(this).val() == '') {
	      $(this).siblings("label").hide();
	    }
	});
	$("select").on("keypress", function() {
	  if($(this).val() == '') {
	      $(this).siblings("label").hide();
	    }
	});
	$("textarea").on("keypress", function() {
	  if($(this).val() == '') {
	      $(this).siblings("label").hide();
	    }
	});

});


</script>


<div class="container">
		<form>
		<div class="form-group row">
			<div class="col-sm-6">
				<label for="firstName">First Name:</label>
				<input type="text" class="form-control" id="firstName" />
			</div>
			<div class="col-sm-6">
				<label for="lastName">Last Name:</label>
				<input type="text" class="form-control" id="lastName" />
			</div>
		</div>
		<div class="form-group row">
			<div class="col-sm-6">
				<label for="email">Email Address:</label>
				<input type="email" class="form-control" id="email" />
			</div>
			<div class="col-sm-6">
				<label for="phone">Phone Number:</label>
				<input type="text" class="form-control" id="phone" />
			</div>
		</div>
		<div class="form-group row">
			<div class="col-sm-6">
				<label for="company">Company Name:</label>
				<input type="text" class="form-control" id="company" />
			</div>
			<div class="col-sm-6">
				<label for="country">Country:</label>
				<select class="form-control" name="Country" id="country"><option value="">Select...</option><option value="Afghanistan">Afghanistan</option><option value="Aland Islands">Aland Islands</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="American Samoa">American Samoa </option><option value="Andorra">Andorra</option><option value="Angola">Angola</option><option value="Anguilla">Anguilla</option><option value="Antarctica">Antarctica</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Aruba">Aruba</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option><option value="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option><option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Botswana">Botswana</option><option value="Bouvet Island">Bouvet Island</option><option value="Brazil">Brazil</option><option value="British Indian Ocean Territory">British Indian Ocean Territory</option><option value="Brunei Darussalam">Brunei Darussalam</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Cape Verde">Cape Verde</option><option value="Cayman Islands">Cayman Islands</option><option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="China">China</option><option value="Chinese Taipei">Chinese Taipei</option><option value="Christmas Island">Christmas Island</option><option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option><option value="Congo">Congo</option><option value="Cook Islands">Cook Islands</option><option value="Costa Rica">Costa Rica</option><option value="Cote d’Ivoire">Cote d’Ivoire</option><option value="Croatia">Croatia</option><option value="Cuba">Cuba</option><option value="Curaçao">Curaçao</option><option value="Cyprus">Cyprus</option><option value="Czech Republic">Czech Republic</option><option value="Denmark">Denmark</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option><option value="Faroe Islands">Faroe Islands</option><option value="Federated Micronesia">Federated Micronesia </option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France">France</option><option value="French Guiana">French Guiana</option><option value="French Polynesia">French Polynesia</option><option value="French Southern Territories">French Southern Territories</option><option value="Gabon">Gabon</option><option value="Gambia">Gambia</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option><option value="Greece">Greece</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option><option value="Guadeloupe">Guadeloupe</option><option value="Guam">Guam </option><option value="Guatemala">Guatemala</option><option value="Guernsey">Guernsey</option><option value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option><option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option><option value="Honduras">Honduras</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="Isle of Man">Isle of Man</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Jamaica">Jamaica</option><option value="Japan">Japan</option><option value="Jersey">Jersey</option><option value="Jordan">Jordan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="Korea, Democratic People’s Republic of">Korea, Democratic People’s Republic of</option><option value="Korea, Republic of">Korea, Republic of</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Lao People’s Democratic Republic">Lao People’s Democratic Republic</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macao">Macao</option><option value="Macedonia, the former Yugoslav Republic of">Macedonia, the former Yugoslav Republic of</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Marshall Islands">Marshall Islands </option><option value="Martinique">Martinique</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mayotte">Mayotte</option><option value="Mexico">Mexico</option><option value="Moldova, Republic of">Moldova, Republic of</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montenegro">Montenegro</option><option value="Montserrat">Montserrat</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Myanmar">Myanmar</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="New Caledonia">New Caledonia</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Niue">Niue</option><option value="Norfolk Island">Norfolk Island</option><option value="Northern Mariana Islands">Northern Mariana Islands </option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau </option><option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Pitcairn">Pitcairn</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Puerto Rico">Puerto Rico </option><option value="Qatar">Qatar</option><option value="Reunion">Reunion</option><option value="Romania">Romania</option><option value="Russian Federation">Russian Federation</option><option value="Rwanda">Rwanda</option><option value="Saint Barthélemy">Saint Barthélemy</option><option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option><option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option value="Saint Lucia">Saint Lucia</option><option value="Saint Martin (French part)">Saint Martin (French part)</option><option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option><option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Sao Tome and Principe">Sao Tome and Principe</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Senegal">Senegal</option><option value="Serbia">Serbia</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="South Africa">South Africa</option><option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option><option value="South Sudan">South Sudan</option><option value="Spain">Spain</option><option value="Sri Lanka">Sri Lanka</option><option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syrian Arab Republic">Syrian Arab Republic</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania, United Republic of">Tanzania, United Republic of</option><option value="Thailand">Thailand</option><option value="Timor-Leste">Timor-Leste</option><option value="Togo">Togo</option><option value="Tokelau">Tokelau</option><option value="Tonga">Tonga</option><option value="Trinidad and Tobago">Trinidad and Tobago</option><option value="Tunesia">Tunesia</option><option value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option><option value="Turks and Caicos Islands">Turks and Caicos Islands</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="United States">United States</option><option value="Uruguay">Uruguay</option><option value="U.S. Minor Outlying Islands">U.S. Minor Outlying Islands </option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Virgin Islands">Virgin Islands </option><option value="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option><option value="Vietnam">Vietnam</option><option value="Virgin Islands, British">Virgin Islands, British</option><option value="Wallis and Futuna">Wallis and Futuna</option><option value="Western Sahara">Western Sahara</option><option value="Yemen">Yemen</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option></select>
			</div>
		</div>

		<div class="radio row">
			<div class="col-md-4 col-xs-6 col-xxs-12">
				<label>
					<input type="radio" name="interest" id="commerce" value="commerce" aria-label="...">
					Commerce Solutions
				</label>
			</div>
			<div class="col-md-4 col-xs-6 col-xxs-12">
				<label>
					<input type="radio" name="interest" id="payments" value="payments" aria-label="...">
					Payments Solutions
				</label>
			</div>
			<div class="col-md-4 col-xs-6 col-xxs-12">
				<label>
					<input type="radio" name="interest" id="marketing" value="marketing" aria-label="...">
					Marketing Solutions
				</label>
			</div>
			<div class="col-md-4 col-xs-6 col-xxs-12">
				<label>
					<input type="radio" name="interest" id="customerService" value="customerService" aria-label="...">
					Customer Service
				</label>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<label for="country">Tell Us More:</label>
				<textarea class="form-control" rows="3"></textarea>
			</div>
		</div>

		  <div class="checkbox">
		    <label>
		      <input type="checkbox"> Opt In: I wish to receive solution, event and company updates from Digital River via email.
		    </label>
		  </div>

		  <input type="hidden" name="LeadSource" value="DR Website" />
		  <input type="hidden" name="Campaign_Medium" value="" />
		  <input type="hidden" name="Campaign_Source" value="" />
		  <input type="hidden" name="Campaign_Term" value="" />
		  <input type="hidden" name="Campaign_ID" value="" />

		  <button type="submit" class="btn btn-primary">Submit</button>



		</form>
</div>

<div class="payments-wrapper">
	<div class="top custom custom-payments slide">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-5 col-sm-6">
					<h1 class="eyebrow option no-margin"><?php echo get_the_title(); ?></h1>
					<h2><?php _e("No limits. No boundaries.", "digital-river"); ?></h2>
					<p><?php _e("Digital River World Payments has the deepest portfolio of local processing solutions around the world and the global expertise to help you expand into emerging markets.", "digital-river"); ?></p>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	<div class="white-bg  slide text-center">
		<div class="container">
			<h2><?php _e( 'Go Global With Digital River World Payments', 'digital-river' ); ?></h2>
			<p><?php _e( 'As you look to expand into new markets, put your business in a position to maximize profitability with a world-class payments partner. Digital River World Payments (DRWP) will help you go to market fast, with the right local payment options to be successful wherever you sell. Partnering with DRWP for your global payment processing is a smart choice, enabling you to easily navigate the complexities and risks of doing business across borders. We are your one-stop shop for accepting payments in new markets around the world. With our reliable, secure, and flexible payments platform, there’s no limit to your success.', 'digital-river' ); ?></p>
			
			<p class="col-lg-offset-1 col-lg-10 ">

				<img class="img-responsive visible-lg" src="<?php echo get_template_directory_uri()."/img/payments/grid-lines-lg.png"; ?>" />
				<img class="img-responsive visible-md" src="<?php echo get_template_directory_uri()."/img/payments/grid-lines-md.png"; ?>" />
			</p>

			<div class="row med-gray-color">
				<div class="col-sm-4">
					<div><i class="dr-cards x10"></i></div>
					<h3 class="h4 option uppercase"><?php _e("Global Payment Methods","digital-river"); ?></h3>
				</div>
				<div class="col-sm-4">
					<div><i class="dr-globe x10"></i></div>
					<h3 class="h4 option uppercase"><?php _e("Global Gateway","digital-river"); ?></h3>
				</div>
				<div class="col-sm-4">
					<div><i class="dr-payments x10"></i></div>
					<h3 class="h4 option uppercase"><?php _e("Multi-National Card Acquiring", "digital-river"); ?></h3>
				</div>
			</div>
		</div>
	</div>
	<div class="lgray-bg slide ">
		<div class="container">
			<div class="row">
				<h2 class="text-center option xtra-margin-btm"><?php _e("Featured Capabilities","digital-river"); ?></h2>
				<div class="col-sm-4">
					<div class="row">
						<div class="col-md-3">
							<img width="50px" class="img-responsive" src="<?php echo get_template_directory_uri()."/img/payments/brazil.png"; ?>" />
						</div>
						<div class="col-md-9 ">
							<h3 class="h4 option no-top-margin"><?php _e("Don’t Miss Out On The Booming Business in Brazil", "digital-river"); ?></h3>
						</div>
					</div>
					<p><?php _e("Whether you have a local entity in Brazil or not, we can increase your revenue potential substantially in the largest ecommerce market in Latin America. We’ll provide a turn-key solution that enables local card processing and popular local payment methods such as Boleto Bancario. Our team of local experts will help you understand the Brazilian payments landscape and maximize your profit potential.", "digital-river"); ?></p>
					<p><a target="_blank" href="/marketing_material/brazil-infographic/"><?php _e("Read More","digital-river"); ?></a></p>
				</div>

				<div class="col-sm-4">
					<div class="row">
						<div class="col-md-3">
							<img width="50px" class="img-responsive" src="<?php echo get_template_directory_uri()."/img/payments/union_pay.png"; ?>" />
						</div>
						<div class="col-md-9 ">
							<h3 class="h4 option no-top-margin"><?php _e("Increase Global Profitability By Offering UnionPay", "digital-river"); ?></h3>
						</div>
					</div>
					<p><?php _e("UnionPay is the largest card network in the world and is growing rapidly. UnionPay represents an enormous revenue opportunity for any global merchant seeking to maximize sales from the trillion dollar Asia ecommerce market. Digital River World Payments is a certified global acquirer capable of accepting UnionPay in any local currency where the card is issued. We also offer flexible options for settlement currency. As one of the first international acquirers of UnionPay cards globally, we give you a direct connection so you don’t have to go through third party networks.", "digital-river"); ?>
					</p>
					<p><a href="/solutions/payments/digital-river-world-payments-unionpay-value-brief/"><?php _e("Read More","digital-river"); ?></a></p>
				</div>

				<div class="col-sm-4">
					<div class="row">
						<div class="col-md-3 ">
							<img width="95px" class="img-responsive" src="<?php echo get_template_directory_uri()."/img/payments/alipay_logo.png"; ?>" />
						</div>
						<div class="col-md-9 ">
							<h3 class="h4 option no-top-margin"><?php _e("Connecting You to the Powerful Alipay Network", "digital-river"); ?></h3>
						</div>
					</div>
					<p><?php _e("Nearly half of all online payments made in China are made through the ewallet service provider Alipay. Whether you have an Asian entity or not, we can give you a direct connection into the powerful Alipay network. We can provide a customized, cost-effective, and reliable solution without the overhead costs and risks of developing and maintaining your own local entity.", "digital-river"); ?></p>
				</div>
			</div>
			
							
			<h3 class="option no-margin"><i class="fa fa-cogs x4 option margin-right"></i><?php _e("Flexible Integration Methods for Optimizing the Consumer Experience", "digital-river"); ?></h3>
			<p><?php _e("To offer online and mobile shoppers a fast, secure, and seamless purchasing experience, we offer powerful integration methods and convenient features:", "digital-river"); ?></p>
			<div class="row">
				<div class="col-md-4">
					<h4 class="inline no-margin option"><?php echo _e("Full-Featured API", "digital-river"); ?></h4><?php _e(": Take full control of your payment experience with one simple API integration that gives you direct access to all our convenient payment features.", "digital-river"); ?>
				</div>
				<div class="col-md-4">
					<h4 class="inline no-margin option"><?php echo _e("Hosted Payment Page", "digital-river"); ?></h4><?php echo __(": With our customizable, ready-made payment page templates, we completely manage sensitive card data for different countries. Our payment pages come ready with the alternative payment methods and language that local consumers prefer.", "digital-river"); ?>
				</div>
				<div class="col-md-4">
					<h4 class="inline no-margin option"><?php echo _e("Notifications", "digital-river"); ?></h4><?php _e(": Proactive ‘push’ notification services provide real-time responses for payments and allow subsequent order information to be sent separately. This is especially useful for alternative payment methods with delayed responses.", "digital-river"); ?>
				</div>
			</div>
		</div>
	</div>


	<?php
		$logos = array(
				array("src" => "Alipay_logo.png", "alt" => "Alipay Logo"),
				array("src" => "AmericanExpress_logo.png", "alt" => "American Express Logo"),
				array("src" => "Boleto_logo.png", "alt" => "Boleto Logo"),
				array("src" => "Bpay_logo.png", "alt" => "BPay Logo"),
				array("src" => "CCAvenue_logo.png", "alt" => "CC Avenue Logo"),
				array("src" => "HyperPay_logo.png", "alt" => "HyperPay Logo"),
				array("src" => "DinersClub_logo.png", "alt" => "Diners Club Logo"),
				array("src" => "Discover_logo.png", "alt" => "Discover Logo"),
				array("src" => "DK_logo.png", "alt" => "DK Logo"),
				array("src" => "dotpay_logo.png", "alt" => "dotpay Logo"),
				array("src" => "Elo_logo.png", "alt" => "Elo Logo"),
				array("src" => "giropay_logo.png", "alt" => "giropay Logo"),
				array("src" => "Hipercard_logo.png", "alt" => "Hipercard Logo"),
				array("src" => "ideal_logo.png", "alt" => "ideal Logo"),
				array("src" => "JCB_logo.png", "alt" => "JCB Logo"),
				array("src" => "Klarna_logo.png", "alt" => "Klarna Logo"),
				array("src" => "Mastercard_logo.png", "alt" => "Mastercard Logo"),
				array("src" => "Nordea_logo.png", "alt" => "Nordea Logo"),
				array("src" => "PayPal_logo.png", "alt" => "PayPal Logo"),
				array("src" => "Sepa_logo.png", "alt" => "Sepa Logo"),
				array("src" => "Sofort_logo.png", "alt" => "Sofort Logo"),
				array("src" => "Swedbank_logo.png", "alt" => "Swedbank Logo"),
				array("src" => "UnionPay_logo.png", "alt" => "UnionPay Logo"),
				array("src" => "Visa_logo.png", "alt" => "Visa Logo")
			);
	?>

	<style>
		.logo-section{
			background-color: rgba(255,255,255,.5);
			padding:15px 35px;
		}
		.logo-wrapper{margin:10px 0;}	
	</style>

	<div class=" blue-bg global expanded slide">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2><?php _e( 'Global Payment Processing', 'digital-river' ); ?></h2>
					<p class="white"><?php _e( 'Providing local payment options is necessary to enter in global markets—and to create the right local shopping experience to be successful. Digital River can provide more payment options in more countries than any other company. We support 175+ currencies, 200+ payment methods, and have relationships with 35+ global card acquiring banks.', 'digital-river' ); ?></p>
					<p>
						<div class="logo-section">
							<div class="row">
								<?php foreach($logos as $logo): ?>
									<div class="logo-wrapper col-md-2 col-sm-3 col-xs-4 col-xxs-6"><img class="img-responsive" alt="<?php echo $logo['alt']; ?>" src="<?php echo get_template_directory_uri()."/img/payments/payment_logos/".$logo['src']; ?>" /></div>
								<?php endforeach; ?>
							</div>
						</div>	
					</p>
					<p>
					<a href="/solutions/payments/drwp-global-payment-processing/" class="btn btn-opposite option margin-top text-center"><?php _e( 'View our global payment methods', 'digital-river' ); ?></a>
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="lgray-bg slide">
		<div class="container">
			<h2 class="text-center option xtra-margin-btm"><?php _e("Businesses We Support", "digital-river"); ?></h2>
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<p class="text-center">
						<img width="200" height="200" class="img-circle" src="<?php echo get_template_directory_uri()."/img/payments/entertainment.jpg"; ?>" />
					</p>
					<h3 class="text-center"><?php _e("Digital Solutions","digital-river"); ?></h3>
					<p><?php _e("Increase profitability by offering flexible billing options, a personalized shopping experience, advanced order management capabilities, and everything you need to sell your product around the world.", "digital-river"); ?></p>
					<strong>Experience:</strong>
					<p><?php _e("We support subscription and one-off billing models and work with many of the world’s leading providers of music, software, and digital goods.", "digital-river"); ?>
					</p>
					<p>
						<a href="/clients/industries/entertainment/"><?php _e("Read More", "digital-river"); ?></a>
					</p>
				</div>
				<div class="col-md-3  col-sm-6">
					<p class="text-center">
						<img width="200" height="200" class="img-circle" src="<?php echo get_template_directory_uri()."/img/payments/travel_leisure.jpg"; ?>" />
					</p>
					<h3 class="text-center"><?php _e("Travel & Leisure","digital-river"); ?></h3>
					<p><?php _e("Expand your customer base and accommodate travelers from around the world by simplifying the buying experience and offering the language, currency and payment methods they prefer.", "digital-river"); ?></p>
					<strong>Experience:</strong>
					<p><?php _e("We help airlines, hotels, travel agencies, cruise lines, car rentals, and other travel businesses manage their unique payment processing needs.", "digital-river"); ?>
					</p>
					<p>

						<a href="/clients/industries/travel/"><?php _e("Read More", "digital-river"); ?></a>
					</p>
				</div>
				<div class="clear visible-sm"></div>
				<div class="col-md-3 col-sm-6">
					<p class="text-center">
						<img width="200" height="200" class="img-circle" src="<?php echo get_template_directory_uri()."/img/payments/retail.jpg"; ?>" />
					</p>
					<h3 class="text-center"><?php _e("Retail","digital-river"); ?></h3>
					<p><?php _e("Increase profitability by offering flexible billing options, a personalized shopping experience, advanced order management capabilities, and everything you need to sell your product around the world.", "digital-river"); ?></p>
					<strong>Experience:</strong>
					<p><?php _e("We’ll help retail businesses reduce cart abandonment and simplify the complexities of global expansion.", "digital-river"); ?></p>
					<p>
						<a href="/solutions/payments/industry-spotlight-retail-value-brief/"><?php _e("Read More", "digital-river"); ?></a>
					</p>
				</div>
				<div class="col-md-3 col-sm-6">
					<p class="text-center">
						<img width="200" height="200" class="img-circle" src="<?php echo get_template_directory_uri()."/img/payments/direct_selling.jpg"; ?>" />
					</p>
					<h3 class="text-center"><?php _e("Direct Selling","digital-river"); ?></h3>
					<p><?php _e("Take your direct selling enterprise to the next level with seamless and rapid international expansion into dozens of emerging markets.", "digital-river"); ?></p>
					<strong>Experience:</strong>
					<p><?php _e("We are uniquely equipped to handle payment acceptance and commission payouts. We provide true local card processing to ensure that local distributor payment cards are processed without cross-border fees.", "digital-river"); ?>
					</p>
					<p>
						<a href="/solutions/payments/industry-spotlight-direct-selling-value-brief/"><?php _e("Read More", "digital-river"); ?></a>
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="blue-bg slide text-center">
		<div class="container">
			<h2><?php _e( 'Our Value-Added Services', 'digital-river' ); ?></h2>
			<p class="white"><?php _e( 'We measure success by more than just the number of credit card payment methods offered at checkout. DRWP combines proven, trusted payment systems with value-added tools and services to offer comprehensive payment solutions for your global business.', 'digital-river' ); ?></p>
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<div><i class="fa fa-check-square-o x10"></i></div>
					<h3 class="h4"><?php _e( 'Secured Payment Credentials Through Tokenization', 'digital-river' ); ?></h3>
				</div>
				<div class="col-md-3 col-sm-6">
					<div><i class="dr-money x10"></i></div>
					<h3 class="h4"><?php _e( 'PCI Compliance', 'digital-river' ); ?></h3>
				</div>
				<div class="col-md-3 col-sm-6">
					<div><i class="dr-phone x10"></i></div>
					<h3 class="h4"><?php _e( 'Payouts to Suppliers &amp; Partners', 'digital-river' ); ?></h3>
				</div>
				<div class="col-md-3 col-sm-6">
					<div><i class="dr-lock x10"></i></div>
					<h3 class="h4"><?php _e( 'Flexible Solution for Mobile Experience', 'digital-river' ); ?></h3>
				</div>
			</div>
		</div>
	</div>

    <?php initResourcesSection(); ?>

    <!-- ecommerce 
    <div style="background:#b3d334;  padding: 30px 0;">
		<div class="row2">
			<div class="span_12" style="text-align:center">
				<h2 class="med heading white"><?php _e( 'Also looking for an ecommerce platform?', 'digital-river' ); ?></h2>
				<p class="white"><?php _e( 'Digital River offers end-to-end commerce and payment processing solutions.', 'digital-river' ); ?></p>
				<a href="/solutions/commerce/commerce-business-infrastructure/" class="button opposite btn-white"><?php _e( 'Click Here', 'digital-river' ); ?></a>
			</div>

			<div class="clear"></div>
		</div>
	</div>

-->
</div>
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> 
 	<script type='text/javascript' src='http://digitalriver.staging.wpengine.com/wp-content/themes/digital-river-translated/js/owl.carousel.min.js?ver=1'></script>
 	<script src="http://digitalriver.staging.wpengine.com/wp-content/themes/digital-river-translated/js/payments.js"></script>
</body>
</html> 

<?php get_footer(); ?>

