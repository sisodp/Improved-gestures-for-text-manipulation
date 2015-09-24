<?php
$interval=$_GET["interval"];
$expName=$_GET["name"];
$fp = fopen('results.txt', 'a');
  if (!$fp) {
    echo "An error occured. Please redo this experiment.";
  } else {
    fwrite( $fp, $expName . ":" . $interval .  "\n" );
    echo "Experiment recorded sucessfully.";
    if (!fclose($fp)) {
    }
  }
?>

