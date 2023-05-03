<?php
$filename = 'data';
if (file_exists($filename)) {
} else {
   mkdir('data', 0700);
}
$arr = ['first' => 1,' second' => 15," third" => "asdas"," forth" => "vv"," fifth" => "asdqw"," sixth" => 45];
foreach ($arr as $key => $value) {
   $a =  $key . '  =  ' . $value;
   $myFile = fopen("data/data.txt",'a') or die('error');
   fwrite($myFile,$a);
}
fclose($myFile);



$path = "2pul/data/lesson2.php";

chmod('data/data.txt','0600');
chmod('data/data.txt','0755');
chown('data/data.txt','rootDev');
echo basename($path,'.php');


unlink('data/data.txt');
echo copy('data/data.txt','data/dataCopy.txt');

echo dirname('data/dataSub/dataData.txt');

echo disk_free_space('C:');
echo file_get_contents('data/dataSub/dataData.txt');
echo file_put_contents('data/dataSub/dataData.txt','Hello World');
echo is_readable('data/dataSub/dataData.txt');
echo is_writable('data/dataSub/dataData.txt');

echo is_uploaded_file('data/dataSub/dataData.txt');
