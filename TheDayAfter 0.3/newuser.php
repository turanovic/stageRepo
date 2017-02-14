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
    </head>
    <body>
        <h1>Achtergrond Informatie</h1>
        <form method="post" name="new_user" action="resources/php/form_validate.php">
            <input type="hidden" name="stage" value="2">
            <!-- Vraag 1 -->
            <h3>1. Wat is je geboortedatum?</h3>
            <input type="date" name="birthdate" value="2005-01-01">
            
            <!-- Vraag 2 -->
            <h3>2. Wat is je geslacht?</h3>
            <select name="gender">
                <option value="m" selected>Man</option>
                <option value="v">Vrouw</option>
            </select>
            
            <!-- Vraag 3 -->
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
            
            <!-- Vraag 7 -->
            <h3>7. Op welke van de volgende partijen zou je stemmen?</h3>
            <i>15 Maart</i><br>
            <select name="party">
                <option value="1" selected>50 Plus (Henk Krol)</option>
                <option value="2">CDA (Sybrand Buma)</option>
                <option value="3">D66 (Alexander Pechtold)</option>
                <option value="4">GroenLinks (Jesse Klaver)</option>
                <option value="5">PvdA (Lodewijk Asscher)</option>
                <option value="6">PVV (Geert Wilders)</option>
                <option value="7">VVD (Mark Rutte)</option>
                <option value="8">SP (Emiel Roemer)</option>
                <option value="9">Weet ik niet/ Wil ik niet zeggen</option>
            </select>
            
            <!-- Vraag 7 -->
            <h3>8. Op welke social media kanalen, magazines en tv programma's volg je het nieuws (over de verkiezingen)?</h3>
            <i>Je kunt meerdere antwoorden selecteren.</i><br>
            <input type="checkbox" value="1" name="news_source" checked>
            <label>Geen</label><br>
            
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
                    
            <input type="checkbox" value="13" name="news_source">
            <label>NRC Next</label><br>
                    
            <input type="checkbox" value="14" name="news_source">
            <label>Financieel Dagblad</label><br>
                    
            <input type="checkbox" value="15" name="news_source">
            <label>Reformatorisch Dagblad</label><br>
                    
            <input type="checkbox" value="16" name="news_source">
            <label>De Gelderlander</label><br>
                    
            <input type="checkbox" value="17" name="news_source">
            <label>Dagblad van het Noorden</label><br>
                    
            <input type="checkbox" value="18" name="news_source">
            <label>Noordhollands Dagblad</label><br>
                    
            <input type="checkbox" value="19" name="news_source">
            <label>De Stentor</label><br>
                    
            <input type="checkbox" value="20" name="news_source">
            <label>Dagblad de Limburger</label><br>
                    
            <input type="checkbox" value="21" name="news_source">
            <label>Brabants Dagblad</label><br>
                    
            <input type="checkbox" value="22" name="news_source">
            <label>De Twentsche Courant</label><br>
                    
            <input type="checkbox" value="23" name="news_source">
            <label>BN/De Stem</label><br>
                    
            <input type="checkbox" value="24" name="news_source">
            <label>Eindhovens Dagblad</label><br>
                    
            <input type="checkbox" value="25" name="news_source">
            <label>Leeuwarder Courant</label><br>
                    
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
            
            <input type="submit" value="Volgende">    
        </form>
    </body>
</html>
<script src="assets/jquery/jquery-3.1.1.slim.min.js"></script>
<script src="resources/js/script.js"></script>