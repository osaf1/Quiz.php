<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
</head>
<body>
<?php
 error_reporting(E_ALL);
 ini_set('display_errors', 1);

 $teller = 17;
 $maximum = 15;

 echo "Teller is voor de while lus ".$teller."<br>";  

 while ($teller <= $maximum) {
    echo "Teller is nu ".$teller."<br>"; 
    $teller++;
 }

 echo "Teller is na de while lus ".$teller."<br>";  
?>

</body>
</html>
