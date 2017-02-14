<!DOCTYPE html>
<html lang="en">
    <header>


<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Boostrap css -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>-->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled and minified vanilla Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<!-- Bootstrap 
<link href="../css/bootstrap.min.css" rel="stylesheet">
<script src="../css/bootstrap-grid.min.css"></script>-->



<!-- Include all compiled plugins (below), or include individual files as needed 
<script src="../js/bootstrap.min.js"></script>-->


<!-- Custom Styling -->
<link href="./css/Style.css" rel="stylesheet">

<!-- custom js -->
<script src="./js/script.js"></script>
        <script src="./js/background.js"></script>
                <title>Achtergrondinformatie</title>
    </header>
    <body>

     <div class="container-fluid">
         <div class="row">
         
            <div class="col-lg-6 col-md-10 col-sm-12 mainForm">

                <form id="form" class="form-horizontal" method="post" action="send.php">
                    <input type="hidden" name="actie" value="background">
                    <!-- title -->
                    <h2>Achtergrondinformatie</h2>

                    <br />
                    <br/>
                    <!-- question 1 -->
                    <h3>1. Wat is je geboortedatum?</h3>
                
                    <select name="date_day" id="day_select">
                        <?php
                            for ($day = 1; $day <= 31; $day++) 
                            {
                                    echo'<option value="' . $day . '">' . $day . '</option>';
                            }
                        ?>
                    </select>

                    <select name="date_month" id="month_select">
                        <?php
                            for ($month = 1; $month <= 12; $month++) 
                            {
                                    echo'<option value="' . $month . '">' . $month . '</option>';
                            }
                        ?>
                    </select>

                    <select name="date_year" id="year_select">
                        <?php
                            for ($year = 1900; $year <= 2005; $year++) 
                            {
                                    echo'<option value="' . $year . '">' . $year . '</option>';
                            }
                        ?>        
                    </select>

                
                   <!--  <select name="leeftijd">
                        php for loop for inserting ages in dropdownlist 
                    
                            for($i = 16; $i < 100; $i++){
                                echo'<option value="' . $i . '">' . $i . '</option>';
                            }
                   
                    </select>-->
                
                    <br/>
                    <br />
                    <!-- question 2 -->
                    <h3>2. Wat is je geslacht?</h3>
                    <select name="gender">
                        <option value="V">Vrouw</option>
                        <option value="M">Man</option>
                    </select>

                    <br/>
                    <br />
                    <!-- question 3 -->
                    <h3>3. Wat is de grootte van je huishouden?</h3>
                    <select name="household">
                        <option value="1">1 persoon</option>
                        <option value="2">2 personen</option>
                        <option value="3">3 personen</option>
                        <option value="4">4 personen</option>
                        <option value="5">5 personen</option>
                        <option value="6">6 personen of meer</option>
                    </select>

                    <br/>
                    <br />
                    <!-- question 4 -->
                    <h3>4. Wat is je hoogst behaalde opleiding?</h3>
                    <select name="education">
                        <option value="0">Weet ik niet / wil ik niet zeggen</option>
                        <option value="1">Geen onderwijs</option>
                        <option value="2">Basisonderwijs</option>
                        <option value="3">LBO / VBO / VMBO (kader- en beroepsgerichte leerweg)</option>
                        <option value="4">MAVO / eerste 3 jaar HAVO en VWO / VMBO (theoretische en gemengde leerweg)</option>
                        <option value="5">MBO</option>
                        <option value="6">HAVO en VWO bovenbouw / WO en HBO propedeuse</option>
                        <option value="7">HBO / WO-bachelor of kandidaats</option>
                        <option value="8">WO-doctoraal of master</option>
                    
                    </select>

                    <br/>
                    <br />
                    <!-- question 5 -->
                    <h3>5. Wat is je huidige werksituatie?</h3>
                    <select name="worksituation">
                        <option value="0">Weet ik niet / wil ik niet zeggen</option>
                        <option value="1">Zelfstandig ondernemer</option>
                        <option value="2">Werkzaam in loondienst</option>
                        <option value="3">Werkzaam bij de overheid</option>
                        <option value="4">Arbeidsongeschikt</option>
                        <option value="5">Werkloos / werk-zoekend / bijstand</option>
                        <option value="6">Gepensioneerd of VUT</option>
                        <option value="7">Studerend / schoolgaand</option>
                        <option value="8">Huisvrouw / huisman / anders</option>
                   
                    </select>

                    <br/>
                    <br />
                    <!-- question 6 -->
                    <h3>6. Wat is je bruto jaarinkomen van het huishouden?</h3>
                    <select name="income">
                        <option value="0">Weet ik niet / wil ik niet zeggen</option>
                        <option value="1">Minimum (< 12.500 Euro)</option>
                        <option value="2">Beneden modaal (12.500 - < 26.200)</option>
                        <option value="3">Modaal (26.200 - < 38.800), inclusief negatief inkomen</option>
                        <option value="4">1-2x Modaal (38.800 - < 65.000)</option>
                        <option value="5">2x Modaal (65.000 - < 77.500)</option>
                        <option value="6">Meer dan 2x modaal (>= 77.500)</option>
                    

                    </select>
  
                    <br />
                    <br />
                    <!-- title -->
                    <h2>Verkiezingsachtergrondinformatie</h2>
                    <br />
                    <!-- question 7 -->
                    <h3>7. Op welke van de volgende partijen zou je stemmen op 15 maart?</h3>
                    <select name="vote_party">
                        <option value="0">Weet ik niet / ik ga niet stemmen</option>
                        <option value="1">50 Plus (Henk Krol)</option>
                        <option value="2">CDA (Sybrand Buma)</option>
                        <option value="3">D66 (Alexander Pechtold)</option>
                        <option value="4">GroenLinks (Jesse Klaver)</option>
                        <option value="5">PvdA (Lodewijk Asscher)</option>
                        <option value="6">PVV (Geert Wilders)</option>
                        <option value="7">VVD (Mark Rutte)</option>
                        <option value="8">SP (Emiel Roemer)</option>
                    </select>

                    <br/>
                    <br />
                    <!-- question 8 -->
                    <h3>8. Op welke social media kanalen, magazines en tv programma's volg je het nieuws (over de verkiezingen)? Je kunt meerdere antwoorden selecteren.</h3>
                    <input type="checkbox" id="nochannel" value="0" name="news_source[]" >Geen<br>
                    <input type="checkbox" value="1" name="news_source[]" class="newschannels">Facebook<br>
                    <input type="checkbox" value="2" name="news_source[]" class="newschannels">Twitter<br>
                    <input type="checkbox" value="3" name="news_source[]" class="newschannels">Instagram<br>
                    <input type="checkbox" value="4" name="news_source[]" class="newschannels">LinkedIn<br>
                    <input type="checkbox" value="5" name="news_source[]" class="newschannels">Reddit<br>

                    <input type="checkbox" value="6" name="news_source[]" class="newschannels">De Telegraaf<br>
                    <input type="checkbox" value="7" name="news_source[]" class="newschannels">Metro<br>
                    <input type="checkbox" value="8" name="news_source[]" class="newschannels">Algemeen Dagblad<br>
                    <input type="checkbox" value="9" name="news_source[]" class="newschannels">De Volkskrant<br>
                    <input type="checkbox" value="10" name="news_source[]" class="newschannels">NRC Handelsblad<br>
                    <input type="checkbox" value="11" name="news_source[]" class="newschannels">Trouw<br>
                    <input type="checkbox" value="12" name="news_source[]" class="newschannels">NRC Next<br>
                    <input type="checkbox" value="13" name="news_source[]" class="newschannels">Financieel Dagblad<br>
                    <input type="checkbox" value="14" name="news_source[]" class="newschannels">Reformatorisch Dagblad<br>
                    <input type="checkbox" value="15" name="news_source[]" class="newschannels">De Gelderlander<br>
                    <input type="checkbox" value="16" name="news_source[]" class="newschannels">Dagblad van het Noorden<br>
                    <input type="checkbox" value="17" name="news_source[]" class="newschannels">Noordhollands Dagblad<br>
                    <input type="checkbox" value="18" name="news_source[]" class="newschannels">De Stentor<br>
                    <input type="checkbox" value="19" name="news_source[]" class="newschannels">Dagblad de Limburger<br>
                    <input type="checkbox" value="20" name="news_source[]" class="newschannels">Brabants Dagblad<br>
                    <input type="checkbox" value="21" name="news_source[]" class="newschannels">De Twentsche Courant<br>
                    <input type="checkbox" value="22" name="news_source[]" class="newschannels">BN/De Stem<br>
                    <input type="checkbox" value="23" name="news_source[]" class="newschannels">Eindhovens Dagblad<br>
                    <input type="checkbox" value="24" name="news_source[]" class="newschannels">Leeuwarder Courant<br>

                    <input type="checkbox" value="25" name="news_source[]" class="newschannels">NOS Journaal<br>
                    <input type="checkbox" value="26" name="news_source[]" class="newschannels">Wereld Draait Door<br>
                    <input type="checkbox" value="27" name="news_source[]" class="newschannels">EenVandaag<br>
                    <input type="checkbox" value="28" name="news_source[]" class="newschannels">Hart van Nederland<br>
                    <input type="checkbox" value="29" name="news_source[]" class="newschannels">RTL Boulevard<br>
                    <input type="checkbox" value="30" name="news_source[]" class="newschannels">RTL Nieuws<br>
                    <input type="checkbox" value="31" name="news_source[]" class="newschannels">RTL Late Night<br>
                    <input type="checkbox" value="32" name="news_source[]" class="newschannels">Zondag met Lubach<br>
                    <input type="checkbox" value="33" name="news_source[]" class="newschannels">Editie NL<br>
                    <input type="checkbox" value="34" name="news_source[]" class="newschannels">Shownieuws<br>
                    <input type="checkbox" value="35" name="news_source[]" class="newschannels">Nieuwsuur<br>



                    <br />
                    <br />

                    <!-- TO DO: leeftijd datum checken op geldigheid als op knop wordt gedrukt -->
                    <div class="form-actions">
                       
                        <input type="submit" id="submit_backgroundinformation" value="Gegevens opslaan en doorgaan naar de vragen">
                        <!-- <input type="submit" value="Gegevens opslaan en doorgaan naar de vragen" id="submit_backgroundinformation"/> -->
                        

                     
                    
                    
                    </div>

                </form>
            </div>
         
         </div>
        
    </div>

    </body>
</html>