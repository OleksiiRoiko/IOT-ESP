<?php
    extract($_REQUEST);
    $file=fopen("form-save.txt","w");

    echo fwrite($file, $input1);

    if ($values != null)
        echo fwrite($file, "read" ."\n");

    fclose($file);
    header("location: index.php");
 ?>
