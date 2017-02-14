<?php

include 'rndm.php';

class userID
{
  public function checkID()
  {
    //connection
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'TheDayAfter';
    $conn = new mysqli($servername, $username, $password, $dbname);

    //check connection
    if($conn->connect_error)
    {
      die("Connection failed: " . $conn->connect_error);
    }

    generateRandomID();

    $clientID = $randomID;
    $clientID = mysql_real_escape_string($clientID);

    $sql = "SELECT * FROM userBackground WHERE userID ='".$clientID."'";

    if($sql == $clientID)
    {
      echo '<script language="javascript">';
      echo 'alert("Er is iets misgegaan, probeer het opnieuw")';
      echo '</script>';
    }
    else
    {
      header('location: questionlist.php');
    }

    $conn->close();
  }
}

?>
