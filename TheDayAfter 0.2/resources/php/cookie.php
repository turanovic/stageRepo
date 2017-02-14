<?php
//setcookie($cookie_name, $cookie_value, time() + (86400 * 30)); 
//setcookie($cookie_name, $cookie_value, time() - 3600);

if(isset($_COOKIE["visiter"])) {
    if($_COOKIE["visiter"] == 1) {
        header("location:newuser.php");
    } else if($_COOKIE["visiter"] == 2) {
        header("location:weeklyform.php");
    } else if($_COOKIE["visiter"] == 3) {
        header("location:end.php");
    } else {//null
        //header("location:index.php");
    }
} else {//als er nog GEEN cookie aanwezig is
    setcookie("visiter", 0, time() + (86400 * 30), "/");
}

?>