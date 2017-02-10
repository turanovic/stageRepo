<?php

class userID
{
  private $UserID;

  public function setID($UserID)
  {
    $this->UserID = $UserID;
  }

  public function getID()
  {
    return $this->UserID;
  }

  public function generateID()
  {
    $UserID = uniqid(rand(100000,999999), true);
    echo $UserID;
  }
}

?>
