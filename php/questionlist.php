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
                
                <!-- question 6 using checkboxes -->
                <h3>Welke social media gebruik je (om het nieuws te volgen)?</h3>


                <br />
                <!-- question 7 using checkboxes -->
                <h3>Welke kranten lees je (om het nieuws te volgen)?</h3>


                <br />
                <!-- question 8 using checkboxes -->
                <h3>Welke tv programma's kijk je (om het nieuws te volgen)?</h3>


                <br />
                <!-- question 6 using dropdownlist -->
                <h3>Op welke partij zou je NU stemmen?</h3>

                <br />
                <br />
                <div class="form-actions">
                    <a href="./questionlist.php"><button type="button"></button></a>
                </div>

            </form>
        </div>
    </div>

    </body>
</html>
