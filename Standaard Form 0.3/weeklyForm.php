<?php
session_start();
if(isset($_SESSION["id"])) {
    echo "U bent ingelogd als: ".$_SESSION["id"];
} else {
    header("location:index.php");
}
?>
<!DOCTYPE HTML>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <title>Wekelijkse Formulier</title>
        <link rel="icon" href="assets/img/favicon.png">
        <link rel="stylesheet" href="resources/css/style.css">
    </head>
    <body>
        
    </body>
</html>
<script src="assets/jquery/jquery-3.1.1.slim.min.js"></script>
<script src="resources/js/script.js"></script>