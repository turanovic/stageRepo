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

    $conn->close();

}
  
verbind();
?>


<!-- CODE TO SAFELY SAVE TEXT FROM TEXTAREA IN THE DATABASE

< ?php
    if ($_POST['submit']) {
        mysql_connect ("localhost", "user", "password") or die ('Error: ' . mysql_error());
        mysql_select_db("databasename") or die ('Data error:' . mysql_error());

        // THIS CODE
        $text = mysql_real_escape_string($_POST['comments']); 
        $query="INSERT INTO KeepData (player_data) VALUES ('$text')";
        mysql_query($query) or die ('Error updating database' . mysql_error());
    }
?>


<form method="post" action="< ?php echo $_SERVER['PHP_SELF']; ?>">
    <textarea name="comments">Example Comment</textarea>
    <input name="submit" type="submit" value="submit" />
</form>

// deze in plaats van "mysql_real_escape_string"
$name = mysqli_real_escape_string($con, trim($_POST["name"]));

-->