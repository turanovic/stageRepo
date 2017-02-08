<?php

function verbind(){
    
    //variables
  $servername = "10.235.26.48:8080"
  $username = "root";
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
