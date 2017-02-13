<?php
include 'rndm.php';
include 'period.php';
class weeklyAnswer
{
  $private userID;
  $private periodID;
  $private candidateID;
  $private source1;
  $private source2;
  $private source3;
  $private article1;
  $private article2;
  $private article3;

  //get/set methods
  public function getUserID()
  {
    return $this->userID;
  }

  public function setUserID($userID)
  {
    $this->userID = $userID;
  }

  public function getPeriodID()
  {
    return $this->periodID;
  }

  public function setPeriodID($periodID)
  {
    $this->periodID = $periodID;
  }

  public function getCandidateID()
  {
    return $this->candidateID;
  }

  public function setCandidateID($candidateID)
  {
    $this->candidateID = $candidateID;
  }

  public function getSource1()
  {
    return $this->source1;
  }

  public function setSource1($source1)
  {
    $this->source1 = $source1;
  }

  public function getSource2()
  {
    return $this->source2;
  }

  public function setSource2($source2)
  {
    $this->source2 = $source2;
  }

  public function getSource3()
  {
    return $this->source3;
  }

  public function setSource3($source3)
  {
    $this->source3 = $source3;
  }

  //insert function
  public function insertAnswer()
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

    $userID = $randomString;
    $periodID = $period;
    $candidateID = $_POST["candidate"];
    $source1 = $_POST["source1"];
    $article1 = $_POST["article1"];
    $source2 = $_POST["source2"];
    $article2 = $_POST["article2"];
    $source3 = $_POST["source2"];
    $article3 = $_POST["article3"];

    $sql = "INSERT INTO userBackground(userID, periodID, candidateID, source1, article1, source2, article2, source3, article3 ) VALUES ('$userID','$periodID','$candidateID', '$source1', '$article1', '$source2', '$article2', '$source3', '$article3')";

    if ($conn->query($sql) === TRUE)
    {
      echo '<script language="javascript">';
      echo 'alert("Gegevens zijn ingevoerd")';
      echo '</script>';
    }

    else
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
  }
}

?>
