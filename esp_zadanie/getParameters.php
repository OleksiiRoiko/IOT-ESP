<?php
  $time = 0;
  $angle = 0;
  $file = fopen("Values.txt","w");
  fwrite($file,$time . "\n");
  fwrite($file,$angle . "\n");
  fclose($file);
?>
