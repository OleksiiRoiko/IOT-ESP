<?php
    extract($_REQUEST);
    $file=fopen("form-save.txt","w");

    fwrite($file,"name :");
    fwrite($file, $input1 ."\n");
    fclose($file);
    header("location: index.php");
 ?>