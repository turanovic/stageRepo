<?php
session_start();
session_destroy();
//setcookie("visiter", 3, time() + (86400 * 30), "/");
?>
<!DOCTYPE HTML>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <title>TheFinalDay - Intro</title>
        <link rel="icon" href="assets/img/favicon.png">
        <link rel="stylesheet" href="resources/css/style.css">
    </head>
    <body>
        <h1>Thanks</h1>
        <form method="post" name="end" action="resources/php/form_validate.php">
            <input type="hidden" name="stage" value="4">
            <input type="submit" value="Opnieuw">    
        </form>
    </body>
</html>
<script src="assets/jquery/jquery-3.1.1.slim.min.js"></script>
<script src="resources/js/script.js"></script>