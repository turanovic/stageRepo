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
         
            <div class="col-lg-6 col-md-10 col-sm-12 mainForm">

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
                    <select name="gender"">
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
                    <h2>Verkiezingsachtergrond informatie</h2>
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
                    <input type="checkbox" value="0" name="news_source[]">Geen<br>
                    <input type="checkbox" value="1" name="news_source[]">Facebook<br>
                    <input type="checkbox" value="2" name="news_source[]">Twitter<br>
                    <input type="checkbox" value="3" name="news_source[]">Instagram<br>
                    <input type="checkbox" value="4" name="news_source[]">LinkedIn<br>
                    <input type="checkbox" value="5" name="news_source[]">Reddit<br>

                    <input type="checkbox" value="6" name="news_source[]">De Telegraaf<br>
                    <input type="checkbox" value="7" name="news_source[]">Metro<br>
                    <input type="checkbox" value="8" name="news_source[]">Algemeen Dagblad<br>
                    <input type="checkbox" value="9" name="news_source[]">De Volkskrant<br>
                    <input type="checkbox" value="10" name="news_source[]">NRC Handelsblad<br>
                    <input type="checkbox" value="11" name="news_source[]">Trouw<br>
                    <input type="checkbox" value="12" name="news_source[]">NRC Next<br>
                    <input type="checkbox" value="13" name="news_source[]">Financieel Dagblad<br>
                    <input type="checkbox" value="14" name="news_source[]">Reformatorisch Dagblad<br>
                    <input type="checkbox" value="15" name="news_source[]">De Gelderlander<br>
                    <input type="checkbox" value="16" name="news_source[]">Dagblad van het Noorden<br>
                    <input type="checkbox" value="17" name="news_source[]">Noordhollands Dagblad<br>
                    <input type="checkbox" value="18" name="news_source[]">De Stentor<br>
                    <input type="checkbox" value="19" name="news_source[]">Dagblad de Limburger<br>
                    <input type="checkbox" value="20" name="news_source[]">Brabants Dagblad<br>
                    <input type="checkbox" value="21" name="news_source[]">De Twentsche Courant<br>
                    <input type="checkbox" value="22" name="news_source[]">BN/De Stem<br>
                    <input type="checkbox" value="23" name="news_source[]">Eindhovens Dagblad<br>
                    <input type="checkbox" value="24" name="news_source[]">Leeuwarder Courant<br>

                    <input type="checkbox" value="25" name="news_source[]">NOS Journaal<br>
                    <input type="checkbox" value="26" name="news_source[]">Wereld Draait Door<br>
                    <input type="checkbox" value="27" name="news_source[]">EenVandaag<br>
                    <input type="checkbox" value="28" name="news_source[]">Hart van Nederland<br>
                    <input type="checkbox" value="29" name="news_source[]">RTL Boulevard<br>
                    <input type="checkbox" value="30" name="news_source[]">RTL Nieuws<br>
                    <input type="checkbox" value="31" name="news_source[]">RTL Late Night<br>
                    <input type="checkbox" value="32" name="news_source[]">Zondag met Lubach<br>
                    <input type="checkbox" value="33" name="news_source[]">Editie NL<br>
                    <input type="checkbox" value="34" name="news_source[]">Shownieuws<br>
                    <input type="checkbox" value="35" name="news_source[]">Nieuwsuur<br>



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
