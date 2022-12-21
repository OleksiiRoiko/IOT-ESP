<?php
    extract($_REQUEST);
    $file=fopen("form-save.txt","w");

    fwrite($file, $input1 ."\n");

    if ($values != null)
        fwrite($file, "read" ."\n");

    fclose($file);
    header("location: index.php");
 ?>
