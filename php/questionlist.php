<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Wekelijkse vragen</title>
        <?php include('../include/header.inc.php')?>
    </head>
    <body>
        <?php
            include('../include/banner.inc.php');
        ?>

        
    <div class="container-fluid">
         <div class="row">
         
            <div class="col-lg-6 col-md-10 col-sm-12 mainForm">
            
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
                <textarea class="boxsizingBorder"></textarea>

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
                <textarea class="boxsizingBorder"></textarea>

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
                <textarea class="boxsizingBorder"></textarea>

                <!-- party vote question -->
                <br/>
                <br/>
                <br />
                <h3>Op welke van de volgende partijen zou je stemmen op 15 maart (kan anders zijn dan eerder)?</h3>
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
                <br />


                <br />
                <br />
                <div class="form-actions">
                    <a href="./questionlist.php"><button type="button">Lever antwoorden in</button></a>
                </div>

            </form>
            </div>
         
         </div>
        
    </div>

    </body>
</html>
