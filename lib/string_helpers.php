<?php
  function seconds_to_time($seconds) {
      $dtF = new DateTime("@0");
      $dtT = new DateTime("@$seconds");
      return $dtF->diff($dtT)->format('%ad %hh %im');
  }

  function pretty_baud($baud) {
    $baud = intval($baud);
    $ret = "unknown";

    if ($baud > 1000000){
      $baud = $baud/1000000;
      $ret = "$baud Mb/s";
    }
    else if ($baud > 1000){
      $baud = $baud/1000;
      $ret = "$baud Kb/s";
    }
    else{
      $ret = "$baud b/s";
    }

    return $ret;
  }

