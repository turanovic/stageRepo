<?php

function verbind(){
    
    //variables
  $servername = "localhost"
  $username = "";
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
