<?php

class period
{
  private $period;
  private $start1 = "2017-02-20 00:00:00";
  private $start2 = "2017-02-27 00:00:00";
  private $start3 = "2017-03-06 00:00:00";
  private $start4 = "2017-03-13 00:00:00";
  private $end1 = "2017-02-26 23:59:59";
  private $end2 = "2017-03-05 23:59:59";
  private $end3 = "2017-03-12 23:59:59";
  private $end4 = "2017-03-19 23:59:59";

  public function getPeriod()
  {
    return $this->period;
  }

  public function setPeriod($period)
  {
    $this->period = $period;
  }

  function definePeriod()
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

}

 ?>
