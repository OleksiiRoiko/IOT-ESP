<?php
    extract($_REQUEST);
    $file=fopen("form-save.txt","w");

    fwrite($file, $input1);
    fclose($file);
    header("location: index.php");
 ?>
