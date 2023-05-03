<?php
var_dump($_FILES);
$array = $_POST;
$myfile = fopen('data.txt','w');
fwrite($myfile,json_encode($array));
fclose($myfile);
$responseData =file_get_contents('data.txt');
echo  $responseData;
?>