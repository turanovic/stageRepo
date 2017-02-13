<?php

$period;
$start1 = "2017-02-13 00:00:00";
$start2 = "2017-02-20 00:00:00";
$start3 = "2017-02-27 00:00:00";
$start4 = "2017-03-06 00:00:00";
$end1 = "2017-02-19 23:59:59";
$end2 = "2017-02-26 23:59:59";
$end3 = "2017-03-05 23:59:59";
$end4 = "2017-03-12 23:59:59";

function getPeriod()
{
  if(strtotime('now') >= strtotime($start1) && strtotime('now') <= strtotime($end1))
  {
    $period = 1;
  }

  else if(strtotime('now') >= strtotime($start2) && strtotime('now') <= strtotime($end2))
  {
    $period = 2;
  }

  else if (strtotime('now') >= strtotime($start3) && strtotime('now') <= strtotime($end3))
  {
    $period = 3;
  }

  else if (strtotime('now') >= strtotime($start4) && strtotime('now') <= strtotime($end4))
  {
    $period = 4;
  }
}

 ?>
