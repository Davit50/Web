<?php

//file System

//echo readfile('file.txt');

/* $myfile = fopen("file.txt","r") or die("Unable open file");
echo fread($myfile,filesize("file.txt"));
fclose($myfile); */

/* $myfile = fopen("file.txt","w");
$a = 'Hello world';
fwrite($myfile,$a);
$b = "Hello All";
fclose($myfile);
$myfile =fopen("file.txt","w");
fwrite($myfile,$b);
fclose($myfile); */

 $myfile =fopen("file.txt","a+");
$data = $data . "_val";
fwrite($myfile,$data);
fclose($myfile);

echo file_exists('data.txt');

?>