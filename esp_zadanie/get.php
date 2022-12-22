<?php
    extract($_REQUEST);
    $file=fopen("form-save.txt","w");

    fwrite($file, $input1);

    if ($values != null)
        fwrite($file, "read");

    fclose($file);
    header("location: index.php");
 ?>
