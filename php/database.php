<?php

function verbind(){
    
    //variables
  $servername = "127.0.0.1"
  $username = "root@localhost";
  $password = "";
  $dbname = "TheDayAfter";

    //create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    //check connection
    if($conn->connect_error)
    {
      die("Connection failed: " . $conn->connect_error);
    }

    $conn->close();

}
  
verbind();
?>
