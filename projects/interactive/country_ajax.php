<?php

$id = $_GET['id'];

    
class Country {
  public $countries = array();
  public $cardAcquirer = array();
  public $internetBank = array();
  public $globalCard = array();
  public $cardType = array();
  public $countryInfo;
  public $countryId;
  public $countryRegion;
  public $countries2 = array();

  public function __construct($countryId){
    $this->countryId = $countryId;
    $file = fopen('./data/main.csv', 'r');
    while (($line = fgetcsv($file)) !== FALSE) { 
        array_push($this->countries,$line);
        $this->countries2[] = $line;

    }
    fclose($file);


    $file = fopen('./data/internetBanks.csv', 'r');
    while (($line = fgetcsv($file)) !== FALSE) {

        
        array_push($this->internetBank,$line);

    }
    fclose($file);

    $file = fopen('./data/cardTypes.csv', 'r');
    while (($line = fgetcsv($file)) !== FALSE) {

        array_push($this->cardType,$line);

    }


    fclose($file);

    $file = fopen('./data/globalCards.csv', 'r');
    while (($line = fgetcsv($file)) !== FALSE) {


        array_push($this->globalCard,$line);

    }
    fclose($file);

    $count = 0;
    $file = fopen('./data/card_acquirer.csv', 'r');
    while (($line = fgetcsv($file)) !== FALSE) {
      if($count != 0){

        array_push($this->cardAcquirer,$line);
      }
      $count++;
    }
    fclose($file);
  }

  public function get_country_info($id = null) {


  if($id != "North America" && $id != "Europe" && $id != "Asia" && $id != "Asia Pacific" && $id != "South America" && $id != "Africa"){
    foreach($this->cardAcquirer as $key => $acquirer){
        $this->countries[$acquirer[0]]['value']['card_acquirer'][$acquirer[1]]['cards'][] = $acquirer[2];
        $this->countries[$acquirer[0]]['value']['card_acquirer'][$acquirer[1]]['name'] = $acquirer[1];
    }

    foreach($this->internetBank as $bank){
      $this->countries[$bank[0]]['value']['bank'][] = $bank[1];
    }


    foreach($this->globalCard as $card){
      $this->countries[$card[0]]['value']['card'][] = $this->getCardInfoById($card[2]);
    }

      $this->countries[$this->countryId]['value'][2] = $this->countries[$this->countryId-1][2];
      $this->countries[$this->countryId]['value'][3] = $this->countries[$this->countryId-1][3];
      $this->countries[$this->countryId]['value'][4] = $this->countries[$this->countryId-1][4];
      $this->countries[$this->countryId]['value'][5] = $this->countries[$this->countryId-1][5];
      

      $this->countryInfo[] = $this->countries[$this->countryId]['value'];
    
    }else{

          $notOtherNA = array(38, 228, 140);
          $notOtherEuro = array(227,58,72,152,172,207,14,21,33,56,57,67,73,80,83,98,104,106,119,124,125,126,134,162,177,196,197,201);
          $notOtherAsia = array(100);
          $notOtherAsiaPacific = array(13);
          $notOtherSouthAmerica = array(30);
          $notOtherAfrica = array();

          foreach ($this->countries2 as $key => $country) {
                if($id == "North America"){
                    if($country[5] == "North America" && !in_array($country[0], $notOtherNA)){
                        $this->countryInfo[$country[0]][1] = $country[1];
                        $this->countryInfo[$country[0]][2] = $country[2];
                        $this->countryInfo[$country[0]][3] = $country[3];
                        $this->countryInfo[$country[0]][4] = $country[4];
                    }
                }else if($id == "Europe"){
                    if($country[5] == "Europe" && !in_array($country[0], $notOtherEuro)){
                        $this->countryInfo[$country[0]][1] = $country[1];
                        $this->countryInfo[$country[0]][2] = $country[2];
                        $this->countryInfo[$country[0]][3] = $country[3];
                        $this->countryInfo[$country[0]][4] = $country[4];
                    }
                }else if($id == "Asia"){
                    if($country[5] == "Asia" && !in_array($country[0], $notOtherAsia)){
                        $this->countryInfo[$country[0]][1] = $country[1];
                        $this->countryInfo[$country[0]][2] = $country[2];
                        $this->countryInfo[$country[0]][3] = $country[3];
                        $this->countryInfo[$country[0]][4] = $country[4];
                    }
                }else if($id == "Asia Pacific"){
                    if($country[5] == "Asia Pacific" && !in_array($country[0], $notOtherAsiaPacific)){
                        $this->countryInfo[$country[0]][1] = $country[1];
                        $this->countryInfo[$country[0]][2] = $country[2];
                        $this->countryInfo[$country[0]][3] = $country[3];
                        $this->countryInfo[$country[0]][4] = $country[4];
                    }
                }else if($id == "South America"){
                    if($country[5] == "South America" && !in_array($country[0], $notOtherSouthAmerica)){
                        $this->countryInfo[$country[0]][1] = $country[1];
                        $this->countryInfo[$country[0]][2] = $country[2];
                        $this->countryInfo[$country[0]][3] = $country[3];
                        $this->countryInfo[$country[0]][4] = $country[4];
                    }
                }else if($id == "Africa"){
                    if($country[5] == "Africa" && !in_array($country[0], $notOtherAfrica)){
                        $this->countryInfo[$country[0]][1] = $country[1];
                        $this->countryInfo[$country[0]][2] = $country[2];
                        $this->countryInfo[$country[0]][3] = $country[3];
                        $this->countryInfo[$country[0]][4] = $country[4];
                    }
                }
          }



    }

}


function getCountryInfo(){
  return $this->countryInfo;
}

function getCountryList(){
  return $this->countries;
}


function getCardInfoById($cardId){
 
  foreach($this->cardType as $card) {
    if ($card[0] == $cardId) {
      return $card;
    }
  }
  return null;
}

}



$countryId = isset($id) ? $id : 13;


    $country = new Country($countryId);

    $country->get_country_info($countryId);
    $thisCountry = $country->getCountryInfo();

echo "<div id='mapOverlay' >";

  if(count($thisCountry) == 1){

    $thisCountry = $thisCountry[0];

  echo "<div class='card-wrapper'>";
  echo "<div class='grid6'>";


        if(count($thisCountry['card']) > 0):
          echo '<div class="grid10">
                <section>
                <h2 class="eyebrow">Global Card List</h2>
                <div class="clear"></div>
                <div class="paymentContent">
                  <div class="col100">';
                     foreach($thisCountry['card'] as $card):
                        echo '<span class="'.$card[2].'" title="'.$card[1].'"></span>';
                    endforeach; 
                  echo '</div>
                </section>
              </div>
           ';
         endif;


  if(isset($thisCountry['card_acquirer'])):

        echo '<div class="grid10">
          <section>
            <h2 class="eyebrow">Global Card Acquirer List</h2>
            <div class="clear"></div>
            <div class="paymentContent ">
              <table id="acquirerList">';
             foreach($thisCountry['card_acquirer'] as $cardAcquirer):
              echo '
                <tr>
                  <td>
                    '.$cardAcquirer['name'].'
                  </td>
                  <td>';

                   foreach($cardAcquirer['cards'] as $card): 

                    $cardInfo = $country->getCardInfoById($card); 
                     echo'<span class="'.$cardInfo[2].'" title="'.$cardInfo[1].'"></span>';
                     endforeach;
                    echo '</td>
                  </tr>';
                endforeach;
              echo '</table>
            </div>
          </section>
        </div>
        ';
        endif;
        
        echo "</div>";




  echo "<div class='grid4'>";

  echo "<div class='country-img-wrapper'>";
  
  if($id == 38){
    $countryImg = "canada";
  }else if($id == 228){
    $countryImg = "unitedstates";
  }else if($id == 140){
    $countryImg = "mexico";
  }else if($id == 30){
      $countryImg = "brazil";
  }else if($id == 13){
      $countryImg = "australia";
  }else if($id == 100){
      $countryImg = "india";
  }else if($id == 227){
    $countryImg = "unitedKingdom";
  }else if($id == 58){
    $countryImg = "denmark";
  }else if($id == 72){
    $countryImg = "finland";
  }else if($id == 152){
    $countryImg = "netherlands";
  }else if($id == 172){
    $countryImg = "poland";
  }else if($id == 207){
    $countryImg = "sweden";
  }else if($id == 14){
    $countryImg = "austria";
  }else if($id == 21){
    $countryImg = "belgium";
  }else if($id == 33){
    $countryImg = "bulgaria";
  }else if($id == 56){
    $countryImg = "cyprus";
  }else if($id == 57){
    $countryImg = "czechRepublic";
  }else if($id == 67){
    $countryImg = "estonia";
  }else if($id == 73){
    $countryImg = "france";
  }else if($id == 80){
    $countryImg = "germany";
  }else if($id == 83){
    $countryImg = "greece";
  }else if($id == 98){
    $countryImg = "hungary";
  }else if($id == 104){
    $countryImg = "ireland";
  }else if($id == 106){
    $countryImg = "italy";
  }else if($id == 119){
    $countryImg = "latvia";
  }else if($id == 124){
    $countryImg = "liechtenstein";
  }else if($id == 125){
    $countryImg = "lithuania";
  }else if($id == 126){
    $countryImg = "luxembourg";
  }else if($id == 134){
    $countryImg = "malta";
  }else if($id == 162){
    $countryImg = "norway";
  }else if($id == 177){
    $countryImg = "romania";
  }else if($id == 196){
    $countryImg = "slovakia";
  }else if($id == 197){
    $countryImg = "slovenia";
  }else if($id == 201){
    $countryImg = "spain";
  }else if($id == 67){
    $countryImg = "estonia";
  }

    if($countryImg):
        echo '<img class=" country-img" style="text-align:center; max-width:90%; max-height:90%;  margin: 0 auto 30px; display: block;" src="http://digitalriver.staging.wpengine.com/wp-content/themes/digital-river-translated/img/interactive/countries/'.$countryImg.'.svg" />';
    endif;

echo "</div>";

echo '<div id="countryResults">';

    echo  '<div class="grid10">
          <section>
          <h2 class="eyebrow">Supported Currency List</h2>
          <div class="clear"></div>
          <div class="paymentContent">
            <div class="grid4">
              <strong>Currency: </strong>'.$thisCountry[2].' 
            </div>
            <div class="grid2">
              <strong>Code: </strong>'.$thisCountry[3].' 
            </div>
            <div class="grid2">
              <strong>Number: </strong>'.$thisCountry[4].' 
            </div>
            <div class="clear"></div>
          </div>
        </section>
        </div>
    ';

   echo "</div></div>";



     if(isset($thisCountry['bank'])): 
      echo '
       <div class="clear"></div>
        <div class="grid10">
          <section>
          <h2 class="eyebrow">Global Internet Bank List</h2>
          <div class="clear"></div>
          <div class="paymentContent">';
             foreach($thisCountry['bank'] as $bank):
                  echo '<div class="grid3 bank">';
                     echo '<span>'.$bank.'</span>';
                  echo '</div>';
             endforeach;
          echo '</div>
              <div class="clear"></div>
          </section>

        </div>
        ';
     endif; 

echo "<div class='clear'></div></div>";
      
}else{

  foreach ($thisCountry as $key => $country) {

    echo  '<div class="grid5">
          <section>
          <h2 class="eyebrow">'.$country[1].'</h2>
          <div class="clear"></div>
          <div class="paymentContent">
            <div class="grid4">
              <strong>Currency: </strong>'.$country[2].' 
            </div>
            <div class="grid2">
              <strong>Code: </strong>'.$country[3].' 
            </div>
            <div class="grid2">
              <strong>Number: </strong>'.$country[4].' 
            </div>
            <div class="clear"></div>
          </div>
        </section>
        </div>

    ';

  }

  echo '<div class="clear"></div>';

}

?>

