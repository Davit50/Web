<?php
$d = json_encode($_POST);
echo $d;
$a = fopen("data.txt","w+");
fwrite($a,$d);
fclose($a);
?>