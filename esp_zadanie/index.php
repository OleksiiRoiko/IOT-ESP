<form action="get.php">
  input1: <input type="text" name="input1">
  <input type="submit" value="Submit">
</form><br>

<form action="get.php">
  <input type="submit" value="Submit" name = "values">
</form><br>

<?php
$str = htmlentities(file_get_contents("Values.txt"));
$time = array();
for ($i = 0; $i < 8; $i++)
    {
      $time[i] = $str[i];  
    }
echo $time;
?>
