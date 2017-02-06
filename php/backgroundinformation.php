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
                    <?php
                        for($i = 16; $i < 100; $i++){
                            echo'<option value="' . $i . '">' . $i . '</option>';
                        }
                    ?>

                </select>



                
                <br />
                <!-- question 2 using dropdownlist -->
                <h3>Wat is je geslacht?</h3>


                <br />
                <!-- question 3 using select and options -->
                <h3>Welke opleiding volg je?</h3>

                <br />
                <!-- question 4 using dropdownlist -->
                <h3>In welke provincie woon je?</h3>

  
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
