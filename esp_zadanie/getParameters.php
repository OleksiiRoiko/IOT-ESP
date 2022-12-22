<?php
  
  $time = $_GET['time'];
  $angle = $_GET['angle'];
  $file = fopen("Values.txt","w");

  fwrite($file,$time . "\n");
  fwrite($file,$angle . "\n");
  
  fclose($file);
?>
