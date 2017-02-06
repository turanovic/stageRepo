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
            
            <form id="form" class="form-horizontal">
                
                <br />
                <!-- question 1 using dropdownlist -->
                <h3>Wat is je leeftijd?</h3>
                <select>

                    <!-- php for loop for inserting ages in dropdownlist -->
                    <?php
                        for($i = 16; $i < 100; $i++){
                            echo'<option value="' . $i . '">' . $i . '</option>';
                        }
                    ?>

                </select>
                
                <br />
                <!-- question 2 using dropdownlist -->
                <h3>Wat is je geslacht?</h3>
                <select>
                    <option value="Vrouw">Vrouw</option>
                    <option value="Man">Man</option>
                </select>


                <br />
                <!-- question 3 using select and options -->
                <h3>Welke opleiding volg je?</h3>
                <select>
                    <option value="Geen">Geen</option>
                    <option value="Administratief / Secretarieel">Administratief / Secretarieel</option>
                    <option value="Design / AV-produktie / Theater">Design / AV-produktie / Theater</option>
                    <option value="Bouw / Hout / Afwerkingstechniek">Bouw / Hout / Afwerkingstechniek</option>
                    <option value="Elektro- / Installatie- / Proces- / Koudetechniek / Metaal">Elektro- / Installatie- / Proces- / Koudetechniek / Metaal</option>
                    <option value="Economie">Economie</option>
                    <option value="Handel/Verkoop">Handel/Verkoop</option>
                    <option value="Entree Breed">Entree Breed</option>
                    <option value="Horeca / Toerisme">Horeca / Toerisme</option>
                    <option value="ICT">ICT</option>
                    <option value="Juridisch">Juridisch</option>
                    <option value="Sport">Sport</option>
                    <option value="Techniek">Techniek</option>
                    <option value="Veiligheid / Veiligheid & Techniek / Handhaving">Veiligheid / Veiligheid & Techniek / Handhaving</option>
                    <option value="Voertuigen / Transport en Logistiek">Voertuigen / Transport en Logistiek</option>
                    <option value="VAVO">VAVO</option>
                    <option value="Zorg & Welzijn">Zorg & Welzijn</option>
                </select>

                <br />
                <!-- question 4 using dropdownlist -->
                <h3>In welke provincie woon je?</h3>
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
  
                <br />
                <!-- question 5 using dropdownlist -->
                <h3>Wat is je nationaliteit?</h3>

                <br />

                <br />
                <div class="form-actions">


                </div>

            </form>
        </div>
    </div>

    </body>
</html>
