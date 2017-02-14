<?php
//setcookie("visiter", 1, time() + (86400 * 30), "/");
?>
<!DOCTYPE HTML>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <title>Achtergrond Informatie</title>
        <link rel="icon" href="assets/img/favicon.png">
        <link rel="stylesheet" href="resources/css/style.css">
                <link rel="stylesheet" href="css/Style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <!-- Latest compiled and minified vanilla Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
       <!-- Boostrap css -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
        <script src="js/background.js"></script>
    </head>
    <body>
 <div class="container-fluid">
         <div class="row">

            <div class="col-lg-6 col-md-10 col-sm-12 mainForm">

        <form method="post" name="new_user" action="resources/php/form_validate.php">
            <input type="hidden" name="stage" value="2">
                <!-- title -->
            <h1>Achtergrond Informatie</h1>
            <!-- Vraag1 -->
            <div class="part1">
            <h3>1. Wat is je geboortedatum?</h3>
            <input type="date" name="birthdate" value="2005-01-01">

            <!-- Vraag 2 -->e
            
            <h3>2. Wat is je geslacht?</h3>
            <select name="gender">
                <option value="m" selected>Man</option>
                <option value="v">Vrouw</option>
            </select>                
            </div>
            <!-- Vraag 3 -->
            <div class="part2">           
            <h3>3. Wat is de grootte van je huishouden?</h3>
            <select name="household">
                <option value="1" selected>1 Persoon</option>
                <option value="2">2 Personen</option>
                <option value="3">3 Personen</option>
                <option value="4">4 Personen</option>
                <option value="5">5 Personen</option>
                <option value="6">6 of meer Personen</option>
            </select>               

            <!-- Vraag 4 -->         
            <h3>4. Wat is je hoogst behaalde opleiding?</h3>
            <select name="education">
                <option value="1" selected>Geen</option>
                <option value="2">Basisonderwijs</option>
                <option value="3">LBO/ VBO/ VMBO (Kader/Beroepsgericht)</option>
                <option value="4">MAVO/HAVO (Vanaf 3 jaar)/ VWO (Vanaf 3 jaar)/ VMBO (Theoretisch)</option>
                <option value="5">MBO</option>
                <option value="6">HAVO (Bovenbouw)/ VWO (Bovenbouw)/ WO en HBO prodeuse</option>
                <option value="7">HBO/ WO Bachelor of Kandidaats</option>
                <option value="8">WO Doctoraal of Master</option>
                <option value="9">Weet ik niet/ Wil ik niet zeggen</option>
            </select>             
            <!-- Vraag 5 -->          
            <h3>5. Wat is je huidige werksituatie?</h3>
            <select name="worksituation">
                <option value="1" selected>Geen</option>
                <option value="2">Studerend</option>
                <option value="3">Zelfstandig ondernemer</option>
                <option value="4">Werkzaam in loondienst</option>
                <option value="5">Werkzaam bij de overheid</option>
                <option value="6">Arbeidsongeschikt</option>
                <option value="7">Werkloos/ Werk-zoekend/ Bijstand</option>
                <option value="8">Gepensioneerd/ VUT</option>
                <option value="9">Huisvrouw/ Huisman</option>
                <option value="10">Weet ik niet/ Wil ik niet zeggen</option>
            </select>                       
            <!-- Vraag 6 -->          
            <h3>6. Wat is je bruto jaarinkomen van het huishouden?</h3>
            <select name="income">
                <option value="1" selected>Tot &euro;12.500</option>
                <option value="2">&euro;12.500 tot &euro;26.200</option>
                <option value="3">&euro;26.200 tot &euro;38.800</option>
                <option value="4">&euro;38.800 tot &euro;65.000</option>
                <option value="5">&euro;65.000 tot &euro;77.500</option>
                <option value="6">Groter dan &euro;77.500</option>
                <option value="7">Weet ik niet/ Wil ik niet zeggen</option>
            </select>         
            </div>  
            <!-- Vraag 7 -->
            <div class="part3">           
            <h3>7. Op welke van de volgende partijen zou je stemmen?</h3>
            <i>15 Maart</i><br>
            
            <label>
  <input type="radio" name="50plus" value="small" />
  <img src="partijLogo/50plus.png">
</label>
           
                       <label>
  <input type="radio" name="cda" value="small" />
  <img src="partijLogo/cda.png">
</label>
           
                       <label>
  <input type="radio" name="d66" value="small" />
  <img src="partijLogo/d66.png">
</label>
           
                       <label>
  <input type="radio" name="groenlinks" value="small" />
  <img src="partijLogo/groenlinks.png">
</label>

                       <label>
  <input type="radio" name="pvda" value="small" />
  <img src="partijLogo/pvda.png">
</label>
        
                       <label>
  <input type="radio" name="pvv" value="small" />
  <img src="partijLogo/pvv.png">
</label>
           
                       <label>
  <input type="radio" name="vvd" value="small" />
  <img src="partijLogo/vvd.png">
</label>
    
                       <label>
  <input type="radio" name="sp" value="candidateID" />
  <img src="partijLogo/sp.png">
</label>
    
                       <label>
  <input type="radio" name="weetniet" value="candidateID" />
  <img src="partijLogo/partijloos.png">
</label>

            <!-- Vraag 8 -->        
           <h3>8. Op welke social media kanalen, magazines en tv programma's volg je het nieuws (over de verkiezingen)?</h3>
            <i>Je kunt meerdere antwoorden selecteren.</i><br>
            <input type="checkbox" value="1" name="news_source" checked>
            <label>Geen</label><br>
            <h5>Social Media:</h5>
            <input type="checkbox" value="2" name="news_source">
            <label>Facebook</label><br>
                    
            <input type="checkbox" value="3" name="news_source">
            <label>Twitter</label><br>
                    
            <input type="checkbox" value="4" name="news_source">
            <label>Instagram</label><br>
                    
            <input type="checkbox" value="5" name="news_source">
            <label>LinkedIn</label><br>
                    
            <input type="checkbox" value="6" name="news_source">
            <label>Reddit</label><br>
            
            <h5>Kranten:</h5>                   
            <input type="checkbox" value="7" name="news_source">
            <label>De Telegraaf</label><br>
                    
            <input type="checkbox" value="8" name="news_source">
            <label>Metro</label><br>
                    
            <input type="checkbox" value="9" name="news_source">
            <label>Algemeen Dagblad</label><br>
                    
            <input type="checkbox" value="10" name="news_source">
            <label>De Volkskrant</label><br>
                    
            <input type="checkbox" value="11" name="news_source">
            <label>NRC Handelsblad</label><br>
                    
            <input type="checkbox" value="12" name="news_source">
            <label>Trouw</label><br>
                    
            <input type="checkbox" value="14" name="news_source">
            <label>Financieel Dagblad</label><br>
                    
            <input type="checkbox" value="15" name="news_source">
            <label>Reformatorisch Dagblad</label><br>
                    
            <input type="checkbox" value="16" name="news_source">
            <label>De Gelderlander</label><br>
                    
            <input type="checkbox" value="21" name="news_source">
            <label>Brabants Dagblad</label><br>
                    
            <input type="checkbox" value="24" name="news_source">
            <label>Eindhovens Dagblad</label><br>
                   
            <h5>TV</h5>        
            <input type="checkbox" value="26" name="news_source">
            <label>NOS Journaal</label><br>
                    
            <input type="checkbox" value="27" name="news_source">
            <label>Wereld Draait Door</label><br>
                    
            <input type="checkbox" value="28" name="news_source">
            <label>EenVandaag</label><br>
                    
            <input type="checkbox" value="29" name="news_source">
            <label>Hart van Nederland</label><br>
                    
            <input type="checkbox" value="30" name="news_source">
            <label>RTL Boulevard</label><br>
                    
            <input type="checkbox" value="31" name="news_source">
            <label>RTL Nieuws</label><br>
                    
            <input type="checkbox" value="32" name="news_source">
            <label>RTL Late Night</label><br>
                    
            <input type="checkbox" value="33" name="news_source">
            <label>Zondag met Lubach</label><br>
                    
            <input type="checkbox" value="34" name="news_source">
            <label>Editie NL</label><br>
                    
            <input type="checkbox" value="35" name="news_source">
            <label>Shownieuws</label><br>
                    
            <input type="checkbox" value="36" name="news_source">
            <label>Nieuwsuur</label><br>      
            </div>                            
                                                         
            <button type="button" id="volgende1" class="btn btn-primary btn-sm">Volgende</button>
            <button type="button" id="volgende2" class="btn btn-primary btn-sm">Volgende</button>
            <button type="button" id="verstuur" class="btn btn-danger btn-sm">Verstuur</button>
            </form>
            </div>
         </div>
    </div>

    </body>
</html>
<script src="assets/jquery/jquery-3.1.1.slim.min.js"></script>
<script src="resources/js/script.js"></script>