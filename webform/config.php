<?php
    extract($_REQUEST);
    $file=fopen("form-save.txt","w");

    fwrite($file,"name :");
    fwrite($file, $username ."\n");
    fwrite($file,"Email :");
    fwrite($file, $email ."\n");
    fwrite($file,"Password :");
    fwrite($file, $password ."\n");
    fwrite($file,"Surname :");
    fwrite($file, $Surname ."\n");
    fwrite($file,"PhoneNumber :");
    fwrite($file, $PhoneNumber ."\n");
    fwrite($file,"PostCode :");
    fwrite($file, $PostCode ."\n");
    fclose($file);
    header("location: index.php");
 ?>
