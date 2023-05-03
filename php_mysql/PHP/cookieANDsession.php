<?php

setcookie('example',json_encode(['token' => 'afsfsf']),time() + 3600);
var_dump($_COOKIE['example']);


/*  $strDate = strtotime("tomorrow");
$date = date("Y-m-d H:i:s",$strDate);
session_start();
$_SESSION['data'] = '$date';
session_destroy();  
 */
?>


