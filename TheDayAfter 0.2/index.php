<?php
require_once("resources/php/cookie.php");
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
        <h1>Welkom</h1>
        <form method="post" name="intro" action="resources/php/form_validate.php">
            <input type="hidden" name="stage" value="1">
            <input type="submit" value="Begin">    
        </form>
    </body>
</html>
<script src="assets/jquery/jquery-3.1.1.slim.min.js"></script>
<script src="resources/js/script.js"></script>