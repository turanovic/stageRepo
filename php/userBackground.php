<?php

class userBackground
{
    //declaration
    $private userID;
    $private birthdate;
    $private gender;
    $private household;
    $private educationID;
    $private workID;
    $private incomeID;
    $private candidateID;
    $private channelID;

    //get/set methods
    public function getUserID()
    {
      return $this->userID;
    }

    public function setUserID($userID)
    {
      $this->userID = $userID;
    }

    public function getBirthdate()
    {
      return $this->birthdate;
    }

    public function setBirthdate($birthdate)
    {
      $this->birthdate = $birthdate;
    }

    public function getGender()
    {
      return $this->gender;
    }

    public function setGender($gender)
    {
      $this->gender = $gender;
    }

    public function getHousehold()
    {
      return $this->household;
    }

    public function setHousehold($household)
    {
      $this->household = $household;
    }

    public function getEducationID()
    {
      return $this->educationID;
    }

    public function setEducationID($educationID)
    {
      $this->educationID = $educationID;
    }

    public function getWorkID()
    {
      return $this->workID;
    }

    public function setWorkID($workID)
    {
      $this->workID = $workID;
    }

    public function getIncomeID()
    {
      return $this->incomeID;
    }

    public function setIncomeID($incomeID)
    {
      $this->incomeID = $incomeID;
    }

    public function getCandidateID()
    {
      return $this->candidateID;
    }

    public function setCandidateID($candidateID)
    {
      $this->candidateID = $candidateID;
    }

    public function getChannelID()
    {
      return $this->channelID;
    }

    public function setChannelID($channelID)
    {
      $this->channelID = $channelID;
    }

    //insert method
    public function insertUser()
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

      //$userID = "";
      $birthdate = "";
      $gender = $_POST['gender'];
      $household = $_POST['household'];
      $educationID = $_POST['education'];
      $workID = $_POST['worksituation'];
      $incomeID = $_POST['income'];
      $candidateID = $_POST['vote_party'];
      $channelID = $_POST['news_source[]'];

      $sql = "INSERT INTO userBackground(userID, birthdate, gender, household, educationID, workID, incomeID, candidateID, channelID) VALUES ('$gender', '$household', '$educationID', '$workID', '$incomeID', '$candidateID', '$channelID')";

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
