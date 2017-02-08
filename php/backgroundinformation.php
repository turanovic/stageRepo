<?php
    
    // get selected leeftijd from question 1
   // $selectLeeftijd = $_POST['leeftijd'];

    // test
    //echo "<script type='text/javascript'>alert('$selectLeeftijd');</script>";
    

?>

<!DOCTYPE html>
<html lang="en">
    <header>
        <title>Achtergrond informatie</title>
        <?php include('../include/header.inc.php');?>
    </header>
    <body>
        <?php
            include('../include/banner.inc.php');
        ?>

        

     <div class="container-fluid">
         <div class="row">
         
            <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 mainForm">

                <form id="form" class="form-horizontal"  action="backgroundinformation.php" method="post">
                    <!-- title -->
                    <h2>Achtergrond informatie</h2>

                    <br />
                    <br/>
                    <!-- question 1 -->
                    <h3>1. Wat is je leeftijd?</h3>
                
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
                    <select>
                        <option value="V">Vrouw</option>
                        <option value="M">Man</option>
                    </select>

                    <br/>
                    <br />
                    <!-- question 3 -->
                    <h3>3. Wat is de grootte van je huishouden?</h3>
                    <select>
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
                    <select>
                        <option value="0">Weet ik niet / wil ik niet zeggen</option>
                        <option value="1">Geen onderwijs</option>
                        <option value="2">Basisonderwijs</option>
                        <option value="3">LBO / VBO / VMBO (kader- en beroepsgerichte leerweg)</option>
                        <option value="4">MAVO / eerste 3 jaar HAVO en VWO / VMBO (theoretische en gemengde leerweg)</option>
                        <option value="5">MBO</option>l</option>
                        <option value="6">HAVO en VWO bovenbouw / WO en HBO propedeuse</option>
                        <option value="7">HBO / WO-bachelor of kandidaats</option>
                        <option value="8">WO-doctoraal of master</option>
                    
                    </select>

                    <br/>
                    <br />
                    <!-- question 5 -->
                    <h3>5. Wat is je huidige werksituatie?</h3>
                    <select>
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
                    <select>
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
                    <h2>Verkiezingsachtergrond informatie</h2>
                    <br />
                    <!-- question 7 -->
                    <h3>7. Op welke van de volgende partijen zou je stemmen op 15 maart?</h3>
                    <select>
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
                    <input type="checkbox" name="0" value="Geen">Geen<br>
                    <input type="checkbox" name="1" value="Facebook">Facebook<br>
                    <input type="checkbox" name="2" value="Twitter">Twitter<br>
                    <input type="checkbox" name="3" value="Instagram">Instagram<br>
                    <input type="checkbox" name="4" value="LinkedIn">LinkedIn<br>
                    <input type="checkbox" name="5" value="Reddit">Reddit<br>

                    <input type="checkbox" name="6" value="De Telegraaf">De Telegraaf<br>
                    <input type="checkbox" name="7" value="Metro">Metro<br>
                    <input type="checkbox" name="8" value="Algemeen Dagblad">Algemeen Dagblad<br>
                    <input type="checkbox" name="9" value="De Volkskrant">De Volkskrant<br>
                    <input type="checkbox" name="10" value="NRC Handelsblad">NRC Handelsblad<br>
                    <input type="checkbox" name="11" value="Trouw">Trouw<br>
                    <input type="checkbox" name="12" value="NRC Next">NRC Next<br>
                    <input type="checkbox" name="13" value="Financieel Dagblad">Financieel Dagblad<br>
                    <input type="checkbox" name="14" value="Reformatorisch Dagblad">Reformatorisch Dagblad<br>
                    <input type="checkbox" name="15" value="De Gelderlander">De Gelderlander<br>
                    <input type="checkbox" name="16" value="Dagblad van het Noorden">Dagblad van het Noorden<br>
                    <input type="checkbox" name="17" value="Noordhollands Dagblad">Noordhollands Dagblad<br>
                    <input type="checkbox" name="18" value="De Stentor">De Stentor<br>
                    <input type="checkbox" name="19" value="Dagblad de Limburger">Dagblad de Limburger<br>
                    <input type="checkbox" name="20" value="Brabants Dagblad">Brabants Dagblad<br>
                    <input type="checkbox" name="21" value="De Twentsche Courant">De Twentsche Courant<br>
                    <input type="checkbox" name="22" value="BN/De Stem">BN/De Stem<br>
                    <input type="checkbox" name="23" value="Eindhovens Dagblad">Eindhovens Dagblad<br>
                    <input type="checkbox" name="24" value="Leeuwarder Courant">Leeuwarder Courant<br>

                    <input type="checkbox" name="25" value="NOS Journaal">NOS Journaal<br>
                    <input type="checkbox" name="26" value="Wereld Draait Door">Wereld Draait Door<br>
                    <input type="checkbox" name="27" value="EenVandaag">EenVandaag<br>
                    <input type="checkbox" name="28" value="Hart van Nederland">Hart van Nederland<br>
                    <input type="checkbox" name="29" value="RTL Boulevard">RTL Boulevard<br>
                    <input type="checkbox" name="30" value="RTL Nieuws">RTL Nieuws<br>
                    <input type="checkbox" name="31" value="RTL Late Night">RTL Late Night<br>
                    <input type="checkbox" name="32" value="Zondag met Lubach">Zondag met Lubach<br>
                    <input type="checkbox" name="33" value="Editie NL">Editie NL<br>
                    <input type="checkbox" name="34" value="Shownieuws">Shownieuws<br>
                    <input type="checkbox" name="35" value="Nieuwsuur">Nieuwsuur<br>



                    <br />
                    <br />

                    <!-- TO DO: leeftijd datum checken op geldigheid als op knop wordt gedrukt -->
                    <div class="form-actions">
                        <a href="./questionlist.php">
                        <!--<button type="button" onclick="alertLeeftijd()"></button>-->
                        <input type="submit" value="Gegevens opslaan en doorgaan naar de vragen" />
                        </a>

                     
                    
                    
                    </div>

                </form>
            </div>
         
         </div>
        
    </div>

    </body>
</html>
