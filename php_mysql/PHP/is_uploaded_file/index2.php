<?php
//var_dump($_POST);
//var_dump($_FILES);
$file=$_FILES["image"];
//var_dump($file);
if(is_uploaded_file($_FILES["image"]["tmp_name"])){
	move_uploaded_file($_FILES["image"]["tmp_name"],"Image1.jpg");
}


?>