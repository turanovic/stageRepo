<?php 


function verbind(){
    
    //variables
  $servername = 'localhost';
  $username = 'website';
  $password = 'dls2KXETD9HcZFYSryCv';
  $dbname = 'TheDayAfterDB';

    //create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    //check connection
    if($conn->connect_error)
    {
      die("Connection failed: " . $conn->connect_error);
    }
	else {
		echo "jippie";
	}

    $conn->close();

}
  
verbind();