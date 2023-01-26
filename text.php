<?php
     
     if (isset($_POST['text']))
     {
          echo $_POST['text'];    
          $file1 = fopen("text.txt","w") or die("Unable to open file!");
          fwrite($file1, "\n". $_POST['text']);
	  fclose($file1);
     } else {
          echo 'nic';
     }

?>
