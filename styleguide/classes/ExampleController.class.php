<?php


class ExampleController{


	function displayHeader($id, $header, $lead = null){
		?>
			<div class="blue-bg header">
	   			<h1 id="<?php echo $id; ?>"><?php echo $header; ?></h1>
	   			<?php if($lead != null): ?>
					<p class="lead"><?php echo $lead; ?></p>
				<?php endif; ?>
			</div>
		<?php
	}

	function displaySubHeader($id, $header, $description){
		?>

		   <h2 class="subhead" id="<?php echo $id; ?>"><?php echo $header; ?></h2>
   			<?php foreach($description as $paragraph): ?>
   				<p><?php echo $paragraph; ?></p>
   			<?php endforeach; ?>

   <?php
	}

	function displayOverview(){
		?>

  		<div class="section-body">

		<p>The Addresses resource provides access to addresses configured for a shopper.</p>
		<p>Note:  All methods in this resource require a full access token. For more information, see initiating an authenticated session in the Authenticated Shopper Workflows.</p>
		<p>An address in the context of a shopper has a default and nickname; for example, "Home" and "Work" nicknames for addresses, with the "Home" address set as the default address.</p>
		<p>Use the Address resource to:</p>
		<ul class="bullet-list">
    		<li>Get a specific address for a shopper</li>
    		<li>Retrieve all addresses for a shopper</li>
    		<li>Create or update an address for a shopper</li>
    		<li>Delete an address for a shopper</li>
    	</ul>
		<p>Note: If you need to access or update a billing or shipping address, use the appropriate methods available in the Carts resource.</p>


		</div>

		<?php
	}

	function displayMethods(){
		?>
  		 <div class="section-body">

		<h2>Methods</h2>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Method</th>
					<th>Description</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="col-md-5"><a href="#">DELETE shoppers/me/addresses/{id} </a></td>
					<td><p>Deletes the shopper address associated with the specified id. Specify the id of the address in the {id} uri path parameter.</p></td>
				</tr>
				<tr>
					<td class="col-md-5"><a href="#">GET shoppers/me/addresses</a></td>
					<td><p>Retrieves all addresses for a shopper.</p></td>
				</tr>
				<tr>
					<td class="col-md-5"><a href="#">GET shoppers/me/addresses/{id}</a></td>
					<td><p>Get an address by id. Specify the id of the address in the {id} uri path parameter.</p></td>
				</tr>
				<tr>
					<td class="col-md-5"><a href="#">POST shoppers/me/addresses</a></td>
					<td><p>Creates or updates a shopper's address.</p></td>
				 </tr>
			</tbody>
		</table>

		</div>
		<?php
	}

	
	function displayFields(){
		?>
  		<div class="section-body">

		<h2>Fields</h2>
		<table class="table table-striped">
 			<thead><tr><th>Field</th><th>Data Type</th><th>Visibility</th><th>Description</th> </tr></thead>
			<tbody>
			 <tr><td>city</td><td>string</td><td>default</td><td><p>The city of the address.</p></td> </tr>
			 <tr><td>companyName </td><td>string</td><td>expand</td><td><p>The company name for the addressee.</p></td> </tr>
			 <tr><td>country </td><td>string</td><td>default</td><td><p>The ISO 3166-1 alpha-2 code of the address.</p></td> </tr>
			 <tr><td>countryName</td><td>string</td><td>default</td><td><p>The country of the address.</p></td> </tr>
			 <tr><td>countrySubdivision</td><td>string</td><td>default</td><td><p>The ISO 3166-2 country subdivision code of the address. The format of the ISO 3166-2 codes is different for each country. The codes may be alphabetic, numeric, or alphanumeric, and they may also be of constant or variable length.</p></td> </tr>
			 <tr><td>countyName</td><td>string</td><td>expand</td><td><p>The county name of the address.</p></td> </tr>
			 <tr><td>firstName</td><td>string</td><td>default</td><td><p>The first name of the addressee.</p></td> </tr>
			 <tr><td>id</td><td>string</td><td>default</td><td><p>The address id. The id is assigned automatically when the address is created.</p></td> </tr>
			 <tr><td>isDefault</td><td>boolean</td><td>default</td><td><p>Indicates if this is the default address for the shopper.</p></td> </tr>
			 <tr><td>lastName</td><td>string</td><td>default</td><td><p>The last name of the addressee.</p></td> </tr>
			 <tr><td>line1 </td><td>string</td><td>default</td><td><p>The first line of the address.</p></td> </tr>
			 <tr><td>line2</td><td>string</td><td>default</td><td><p>The second line of the address.</p></td> </tr>
			 <tr><td>line3</td><td>string</td><td>expand</td><td><p>The third line of the address.</p></td> </tr>
			 <tr><td>nickName</td><td>string</td><td>default</td><td><p>The nickname of the shopper address; for example, home or work.</p>
			<p>&nbsp;</p></td> </tr>
			 <tr><td>phoneNumber </td><td>string</td><td>default</td><td><p>The first phone of the addressee.</p></td> </tr>
			 <tr><td>postalCode </td><td>string</td><td>default</td><td><p>The postal code of the address.</p></td> </tr>
			</tbody>
		</table>


		</div>
		<?php
	}

	

}


?>