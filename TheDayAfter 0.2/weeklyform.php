<?php
    
session_start();
if(!isset($_SESSION["id"])) {
    header("location:index.php");
}
echo $_SESSION["id"]; 

//setcookie("visiter", 2, time() + (86400 * 30), "/"); 
?>
<!DOCTYPE HTML>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <title>The Final Day</title>
        <link rel="icon" href="assets/img/favicon.png">
        <link rel="stylesheet" href="resources/css/style.css">
    </head>
    <body>
        <h1>Wekelijkse Form</h1>
        <form method="post" name="weekly_form" action="resources/php/form_validate.php">
            <input type="hidden" name="stage" value="3">
            <!-- Vraag 1 -->
            <h3>Op welke partij zou jij stemmen?</h3>
            <select name="party">
                    <option value="0">Weet ik niet / Ik ga niet stemmen</option>
                    <option value="1" selected>50 Plus (Henk Krol)</option>
                    <option value="2">CDA (Sybrand Buma)</option>
                    <option value="3">D66 (Alexander Pechtold)</option>
                    <option value="4">GroenLinks (Jesse Klaver)</option>
                    <option value="5">PvdA (Lodewijk Asscher)</option>
                    <option value="6">PVV (Geert Wilders)</option>
                    <option value="7">VVD (Mark Rutte)</option>
                    <option value="8">SP (Emiel Roemer)</option>
                    
            </select>
            
            <!-- Vraag 2 -->
            <h3>Artikel 1</h3>
            <input type="radio" name="article_1" value="1">
            <label>TV Kanaal</label><br>
            
            <input type="radio" name="article_1" value="2">
            <label>Social Media</label><br>
            
            <input type="radio" name="article_1" value="3">
            <label>Krant</label><br>
            
            <input type="radio" name="article_1" value="4">
            <label>Toespraak</label><br>
            
            <input type="radio" name="article_1" value="5">
            <label>Debat</label><br>
            
            <input type="radio" name="article_1" value="6">
            <label>Anders..</label><br><br>
            
            <label>Inhoud artikel</label><br>
            <textarea name="article_text_1"></textarea><br>
            
            <!-- Vraag 3 -->
            <h3>Artikel 2</h3>
            <input type="radio" name="article_2" value="1">
            <label>TV Kanaal</label><br>
            
            <input type="radio" name="article_2" value="2">
            <label>Social Media</label><br>
            
            <input type="radio" name="article_2" value="3">
            <label>Krant</label><br>
            
            <input type="radio" name="article_2" value="4">
            <label>Toespraak</label><br>
            
            <input type="radio" name="article_2" value="5">
            <label>Debat</label><br>
            
            <input type="radio" name="article_2" value="6">
            <label>Anders..</label><br><br>
            
            <label>Inhoud artikel</label><br>
            <textarea name="article_text_2"></textarea><br>
            
            <!-- Vraag 4 -->
            <h3>Artikel 3</h3>
            <input type="radio" name="article_3" value="1">
            <label>TV Kanaal</label><br>
            
            <input type="radio" name="article_3" value="2">
            <label>Social Media</label><br>
            
            <input type="radio" name="article_3" value="3">
            <label>Krant</label><br>
            
            <input type="radio" name="article_3" value="4">
            <label>Toespraak</label><br>
            
            <input type="radio" name="article_3" value="5">
            <label>Debat</label><br>
            
            <input type="radio" name="article_3" value="6">
            <label>Anders..</label><br><br>
            
            <label>Inhoud artikel</label><br>
            <textarea name="article_text_3"></textarea><br>
            <input type="submit" value="Volgende">    
        </form>
    </body>
</html>
<script src="assets/jquery/jquery-3.1.1.slim.min.js"></script>
<script src="resources/js/script.js"></script>