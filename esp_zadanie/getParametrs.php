<?php
  $time = 0;
  $angle = 0;
  $file = fopen("Values.txt","w");
  echo fwrite($file,$time . "\n");
  echo fwrite($file,$angle . "\n");
  fclose($file);
?>
