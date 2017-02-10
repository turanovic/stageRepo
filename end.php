<?php
    
    // get selected leeftijd from question 1
   // $selectLeeftijd = $_POST['leeftijd'];

    // test
    //echo "<script type='text/javascript'>alert('$selectLeeftijd');</script>";
    

?>

<!-- INFORMATIE DATA NAAR DATABASE: https://stackoverflow.com/questions/17139501/using-post-to-get-select-option-value-from-html -->

<!DOCTYPE html>
<html lang="en">
    <header>
        <title>Enquête verzonden</title>
        <?php include('./include/header.inc.php');?>
    </header>
    <body>
        <?php
            include('./include/banner.inc.php');
        ?>

        

     <div class="container-fluid">
         <div class="row">
         
            <div class="col-lg-6 col-md-10 col-sm-12 mainForm">

                <h2>Enquête verzonden</h2>
                <p>
                    Bedankt voor het invullen van de enquête. Tot volgende week!
                </p>

            </div>
         
         </div>
        
    </div>

    </body>
</html>
