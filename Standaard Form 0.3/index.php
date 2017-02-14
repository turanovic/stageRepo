<!DOCTYPE HTML>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <title>Project 0.3</title>
        <link rel="icon" href="assets/img/favicon.png">
        <link rel="stylesheet" href="resources/css/style.css">
    </head>
    <body>
        <form method="post" name="existing_user" action="resources/php/config.php">
            <h2>Bestaande gebruiker</h2>
            <input type="hidden" name="stage" value="0">
            <input type="number" name="id" placeholder="Gebruiker ID" required>
            <input type="submit" value="Inloggen">
        </form>
        
        <form method="post" name="new_user" action="resources/php/config.php">
            <h2>Nieuwe gebruiker</h2>
            <input type="hidden" name="stage" value="1">
            <input type="submit" value="Aanmaken">
        </form>
    </body>
</html>
<script src="assets/jquery/jquery-3.1.1.slim.min.js"></script>
<script src="resources/js/script.js"></script>