<?php
function verbind(){
    //variables
  $servername = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'TheDayAfter';

    //create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    //check connection
    if($conn->connect_error)
    {
      die("Connection failed: " . $conn->connect_error);
    }
    else
    {
        echo 'Connectie is aangemaakt. Jeej';
    }

    $conn->close();

}
  
verbind();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
