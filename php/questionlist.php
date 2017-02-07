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
                <!-- title -->
                <h2>Wekelijkse vragen</h2>
                <!-- information -->
                <p>
                    Welk nieuwsbericht / uitspraak / toespraak (speech) van kanditaten/partijen pakte jouw aandacht afgelopen week? Geef a.u.b. minimaal één artikel of nieuwsbericht op. Je kunt er maximaal drie invoeren. Je kunt het artikel/nieuwsbericht kopiëren/plakken of zelf schrijven in de boxen hieronder.
                </p>
                <!-- article 1 -->
                <br />
                <h3>Artikel 1:</h3>
                <p>
                    Bron van artikel:
                </p>
                <!-- action: unknown for now // method=post (data invisible for others) -->
                <form action="" method="post">
                  <input type="radio" name="source" value="TV kanaal">TV kanaal<br>
                  <input type="radio" name="source" value="Social media">Social media<br>
                  <input type="radio" name="source" value="(Online) krant">(Online) krant<br>
                  <input type="radio" name="source" value="Toespraak (speech)">Toespraak (speech)<br>
                  <input type="radio" name="source" value="Debat">Debat<br>
                  <input type="radio" name="source" value="Anders">Anders... (meld hieronder)<br>
                </form>
                <br/>
                <p>
                    Inhoud van artikel/nieuwsbericht
                </p>
                <textarea rows="10" cols="50">
                </textarea>

                <!-- article 2 -->
                <br/>
                <br />
                <h3>Artikel 2:</h3>
                <p>
                    Bron van artikel:
                </p>
                <!-- action: unknown for now // method=post (data invisible for others) -->
                <form action="" method="post">
                  <input type="radio" name="source" value="TV kanaal">TV kanaal<br>
                  <input type="radio" name="source" value="Social media">Social media<br>
                  <input type="radio" name="source" value="(Online) krant">(Online) krant<br>
                  <input type="radio" name="source" value="Toespraak (speech)">Toespraak (speech)<br>
                  <input type="radio" name="source" value="Debat">Debat<br>
                  <input type="radio" name="source" value="Anders">Anders... (meld hieronder)<br>
                </form>
                <br/>
                <p>
                    Inhoud van artikel/nieuwsbericht
                </p>
                <textarea rows="10" cols="50">
                </textarea>

                <!-- article 3 -->
                <br/>
                <br />
                <h3>Artikel 3:</h3>
                <p>
                    Bron van artikel:
                </p>
                <!-- action: unknown for now // method=post (data invisible for others) -->
                <form action="" method="post">
                  <input type="radio" name="source" value="TV kanaal">TV kanaal<br>
                  <input type="radio" name="source" value="Social media">Social media<br>
                  <input type="radio" name="source" value="(Online) krant">(Online) krant<br>
                  <input type="radio" name="source" value="Toespraak (speech)">Toespraak (speech)<br>
                  <input type="radio" name="source" value="Debat">Debat<br>
                  <input type="radio" name="source" value="Anders">Anders... (meld hieronder)<br>
                </form>
                <br/>
                <p>
                    Inhoud van artikel/nieuwsbericht
                </p>
                <textarea rows="10" cols="50">
                </textarea>

                <!-- party vote question -->
                <br/>
                <br/>
                <br />
                <h3>Op welke van de volgende partijen zou je stemmen op 15 maart (kan anders zijn dan eerder)?</h3>
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
                <br />


                <br />
                <br />
                <div class="form-actions">
                    <a href="./questionlist.php"><button type="button">Lever antwoorden in</button></a>
                </div>

            </form>
        </div>
    </div>

    </body>
</html>
