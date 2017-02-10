<?php


var_dump($_POST);


//hieronder de insert in de database

if ($_POST['actie'] == 'background') {

    //insert background info TODO


    }
elseif ($_POST['actie'] == 'weekly') {

    //insert in weekly  TODO


    }
    else {
        // hier komt ie niet


}





//als de insert niet goed dan wel terugsturen naar backgroundinfo


//en als dat goed is gegaan dan doorsturen naar questionlist.php

if ($_POST['actie'] == 'background') {

    header('location: questionlist.php');

}
else {
    
    header('location: end.php');

}


?>

