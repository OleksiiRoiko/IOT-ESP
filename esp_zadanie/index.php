<form action="get.php">
  input1: <input type="text" name="input1">
  <input type="submit" value="Submit">
</form><br>

<form action="get.php">
  <input type="submit" value="Submit" name = "values">
</form><br>

<?php
$str = array(htmlentities(file_get_contents("Values.txt")));
echo $str;
?>
