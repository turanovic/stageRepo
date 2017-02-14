<?php
    function generateRandomID($length = 6)
    {
      $characters = '0123456789';
      $charactersLength = strlen($characters);
      $randomID = '';
      for ($i = 0; $i < $length; $i++)
      {
        $randomID .= $characters[rand(0, $charactersLength - 1)];
      }
      return $randomID;
    }
?>
