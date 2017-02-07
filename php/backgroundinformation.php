<?php
    
    // get selected leeftijd from question 1
   // $selectLeeftijd = $_POST['leeftijd'];

    // test
    //echo "<script type='text/javascript'>alert('$selectLeeftijd');</script>";
    

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Achtergrond informatie</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom Styling -->
        <link href="../css/Style.css" rel="stylesheet">

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/script.js"></script>
        </head>
    <body>
        <?php
            include('../include/banner.inc.php');
        ?>

        

     <div class="container">
        <div class="col-md-4 col-md-offset-4 mainForm">

            <form id="form" class="form-horizontal" action="backgroundinformation.php" method="post">
                <!-- title -->
                <h2>Achtergrond informatie</h2>

                <br />
                <br/>
                <!-- question 1 -->
                <h3>1. Wat is je leeftijd?</h3>
                <select name="leeftijd">

                    <!-- php for loop for inserting ages in dropdownlist -->
                    <?php
                        for($i = 16; $i < 100; $i++){
                            echo'<option value="' . $i . '">' . $i . '</option>';
                        }
                    ?>
                </select>
                
                <br/>
                <br />
                <!-- question 2 -->
                <h3>2. Wat is je geslacht?</h3>
                <select>
                    <option value="Vrouw">Vrouw</option>
                    <option value="Man">Man</option>
                </select>

                <br/>
                <br />
                <!-- question 3 -->
                <h3>3. Wat is de grootte van je huishouden?</h3>
                <select>
                    <option value="1 persoon">1 persoon</option>
                    <option value="2 personen">2 personen</option>
                    <option value="3 personen">3 personen</option>
                    <option value="4 personen">4 personen</option>
                    <option value="5 personen">5 personen</option>
                    <option value="6 personen">6 personen</option>
                </select>

                <br/>
                <br />
                <!-- question 4 -->
                <h3>4. Wat is je hoogst behaalde opleiding?</h3>
                <select>
                    <option value="Geen onderwijs">Geen onderwijs</option>
                    <option value="Basisonderwijs">Basisonderwijs</option>
                    <option value="LBO \ VBO \ VMBO (kader- en beroepsgerichte leerweg)">2:LBO \ VBO \ VMBO (kader- en beroepsgerichte leerweg)</option>
                    <option value="MAVO \ eerste 3 jaar HAVO en VWO \ VMBO (theoretische en gemengde leerweg)">MAVO \ eerste 3 jaar HAVO en VWO \ VMBO (theoretische en gemengde leerweg)</option>
                    <option value="MBO">MBO</option>l</option>
                    <option value="HAVO en VWO bovenbouw \ WO en HBO propedeuse">HAVO en VWO bovenbouw \ WO en HBO propedeuse</option>
                    <option value="HBO \ WO-bachelor of kandidaats">HBO \ WO-bachelor of kandidaats</option>
                    <option value="WO-doctoraal of master">WO-doctoraal of master</option>
                    <option value="Weet niet \ wil niet zeggen">Weet niet \ wil niet zeggen</option>
                </select>

                <br/>
                <br />
                <!-- question 5 -->
                <h3>5. In welke provincie woon je?</h3>
                <select>
                     <option value="Noord-Brabant">Noord-Brabant</option>
                     <option value="Gelderland">Gelderland</option>
                     <option value="Limburg">Limburg</option>
                     <option value="Utrecht">Utrecht</option>
                     <option value="Zuid-holland">Zuid-holland</option>
                     <option value="Noord-Holland">Noord-Holland</option>
                     <option value="Zeeland">Zeeland</option>
                     <option value="Flevoland">Flevoland</option>
                     <option value="Overijssel">Overijssel</option>
                     <option value="Drenthe">Drenthe</option>
                     <option value="Groningen">Groningen</option>
                     <option value="Friesland">Friesland</option>
                </select>
  
                <br/>
                <br />
                <!-- question 6 -->
                <h3>6. Wat is je huidige werksituatie?</h3>
                <select>
                    <option value="Zelfstandig ondernemer">Zelfstandig ondernemer</option>
                    <option value="Werkzaam in loondienst">Werkzaam in loondienst</option>
                    <option value="Werkzaam bij de overheid">Werkzaam bij de overheid</option>
                    <option value="Arbeidsongeschikt">Arbeidsongeschikt</option>
                    <option value="Werkloos \ werk-zoekend \ bijstand">Werkloos \ werk-zoekend \ bijstand</option>
                    <option value="Gepensioneerd of VUT">Gepensioneerd of VUT</option>
                    <option value="Studerend \ schoolgaand">Studerend \ schoolgaand</option>
                    <option value="Huisvrouw \ huisman \ anders">Huisvrouw \ huisman \ anders</option>
                    <option value="weet niet\wil niet zeggen">weet niet\wil niet zeggen</option>
                </select>

                <br/>
                <br />
                <!-- question 7 -->
                <h3>7. Wat is je huidige werksituatie?</h3>
                <select>
                    <option value="Zelfstandig ondernemer">Zelfstandig ondernemer</option>
                    <option value="Werkzaam in loondienst">Werkzaam in loondienst</option>
                    <option value="Werkzaam bij de overheid">Werkzaam bij de overheid</option>
                    <option value="Arbeidsongeschikt">Arbeidsongeschikt</option>
                    <option value="Werkloos \ werk-zoekend \ bijstand">Werkloos \ werk-zoekend \ bijstand</option>
                    <option value="Gepensioneerd of VUT">Gepensioneerd of VUT</option>
                    <option value="Studerend \ schoolgaand">Studerend \ schoolgaand</option>
                    <option value="Huisvrouw \ huisman \ anders">Huisvrouw \ huisman \ anders</option>
                    <option value="weet niet\wil niet zeggen">weet niet\wil niet zeggen</option>
                </select>

                <br/>
                <br />
                <!-- question 8 -->
                <h3>8. Wat is je huidige werksituatie?</h3>
                <select>
                    <option value="Minimum (<12.500 Euro)">Minimum (< 12.500 Euro)</option>
                    <option value="Beneden modaal (12.500 - < 26.200)">Beneden modaal (12.500 - < 26.200)</option>
                    <option value="Modaal (26.200 - < 38.800), inclusief negatief inkomen">Modaal (26.200 - < 38.800), inclusief negatief inkomen</option>
                    <option value="1-2x Modaal (38.800 - < 65.000)">1-2x Modaal (38.800 - < 65.000)</option>
                    <option value="2x Modaal (65.000 - < 77.500)">2x Modaal (65.000 - < 77.500)</option>
                    <option value="Meer dan 2x modaal (>= 77.500)T">Meer dan 2x modaal (>= 77.500)</option>
                    <option value="Weet echt niet \ wil echt niet zeggen">Weet echt niet \ wil echt niet zeggen</option>

                </select>
  
                <br />
                <br />
                <!-- title -->
                <h2>Verkiezingsachtergrond informatie</h2>
                <br />
                <!-- question 9 -->
                <h3>9. Op welke van de volgende partijen zou je stemmen op 15 maart?</h3>
                <select>
                    <option value="50 Plus">50 Plus</option>
                    <option value="CDA">CDA</option>
                    <option value="D66">D66</option>
                    <option value="GroenLinks">GroenLinks</option>
                    <option value="PvdA">PvdA</option>
                    <option value="PVV">PVV</option>
                    <option value="VVD">VVD</option>
                    <option value="SP">SP</option>
                </select>

                <br/>
                <br />
                <!-- question 10 -->
                <h3>10. Op welke social media kanalen, magazines en tv programma's volg je het nieuws (over de verkiezingen)? Je kunt meerdere antwoorden selecteren.</h3>
                <input type="checkbox" name="nieuwsvolgen_socialmedia" value="Geen">Geen<br>
                <input type="checkbox" name="nieuwsvolgen_socialmedia" value="Facebook">Facebook<br>
                <input type="checkbox" name="nieuwsvolgen_socialmedia" value="Twitter">Twitter<br>
                <input type="checkbox" name="nieuwsvolgen_socialmedia" value="Instagram">Instagram<br>
                <input type="checkbox" name="nieuwsvolgen_socialmedia" value="LinkedIn">LinkedIn<br>
                <input type="checkbox" name="nieuwsvolgen_socialmedia" value="Reddit">Reddit<br>

                <input type="checkbox" name="nieuwsvolgen_newspapers" value="De Telegraaf">De Telegraaf<br>
                <input type="checkbox" name="nieuwsvolgen_newspapers" value="Metro">Metro<br>
                <input type="checkbox" name="nieuwsvolgen_newspapers" value="Algemeen Dagblad">Algemeen Dagblad<br>
                <input type="checkbox" name="nieuwsvolgen_newspapers" value="De Volkskrant">De Volkskrant<br>
                <input type="checkbox" name="nieuwsvolgen_newspapers" value="NRC Handelsblad">NRC Handelsblad<br>
                <input type="checkbox" name="nieuwsvolgen_newspapers" value="Trouw">Trouw<br>
                <input type="checkbox" name="nieuwsvolgen_newspapers" value="NRC Next">NRC Next<br>
                <input type="checkbox" name="nieuwsvolgen_newspapers" value="Financieel Dagblad">Financieel Dagblad<br>
                <input type="checkbox" name="nieuwsvolgen_newspapers" value="Reformatorisch Dagblad">Reformatorisch Dagblad<br>
                <input type="checkbox" name="nieuwsvolgen_newspapers" value="De Gelderlander">De Gelderlander<br>
                <input type="checkbox" name="nieuwsvolgen_newspapers" value="Dagblad van het Noorden">Dagblad van het Noorden<br>
                <input type="checkbox" name="nieuwsvolgen_newspapers" value="Noordhollands Dagblad">Noordhollands Dagblad<br>
                <input type="checkbox" name="nieuwsvolgen_newspapers" value="De Stentor">De Stentor<br>
                <input type="checkbox" name="nieuwsvolgen_newspapers" value="Dagblad de Limburger">Dagblad de Limburger<br>
                <input type="checkbox" name="nieuwsvolgen_newspapers" value="Brabants Dagblad">Brabants Dagblad<br>
                <input type="checkbox" name="nieuwsvolgen_newspapers" value="De Twentsche Courant">De Twentsche Courant<br>
                <input type="checkbox" name="nieuwsvolgen_newspapers" value="BN/De Stem">BN/De Stem<br>
                <input type="checkbox" name="nieuwsvolgen_newspapers" value="Eindhovens Dagblad">Eindhovens Dagblad<br>
                <input type="checkbox" name="nieuwsvolgen_newspapers" value="Leeuwarder Courant">Leeuwarder Courant<br>

                <input type="checkbox" name="nieuwsvolgen_tvshows" value="NOS Journaal">NOS Journaal<br>
                <input type="checkbox" name="nieuwsvolgen_socialmedia" value="Wereld Draait Door">Wereld Draait Door<br>
                <input type="checkbox" name="nieuwsvolgen_socialmedia" value="EenVandaag">EenVandaag<br>
                <input type="checkbox" name="nieuwsvolgen_socialmedia" value="Hart van Nederland">Hart van Nederland<br>
                <input type="checkbox" name="nieuwsvolgen_socialmedia" value="RTL Boulevard">RTL Boulevard<br>
                <input type="checkbox" name="nieuwsvolgen_socialmedia" value="RTL Nieuws">RTL Nieuws<br>
                <input type="checkbox" name="nieuwsvolgen_socialmedia" value="RTL Late Night">RTL Late Night<br>
                <input type="checkbox" name="nieuwsvolgen_socialmedia" value="Zondag met Lubach">Zondag met Lubach<br>
                <input type="checkbox" name="nieuwsvolgen_socialmedia" value="Editie NL">Editie NL<br>
                <input type="checkbox" name="nieuwsvolgen_socialmedia" value="Shownieuws">Shownieuws<br>
                <input type="checkbox" name="nieuwsvolgen_socialmedia" value="Nieuwsuur">Nieuwsuur<br>



                <br />
                <br />
                <div class="form-actions">
                    <a href="./questionlist.php">
                    <button type="button" onclick="alertLeeftijd()"></button>
                    
                    </a>

                    <!-- TEST
                    <input type="submit" value="Gegevens opslaan en doorgaan naar de vragen" onclick="insert()" />
                    -->
                </div>

            </form>
        </div>
    </div>

    </body>
</html>
