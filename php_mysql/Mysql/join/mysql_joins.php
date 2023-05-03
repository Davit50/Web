<?php
include '../config.php';

$con = new mysqli(DB_HOST,DB_USER_NAME,DB_PASSWORD);



$query = "USE test_db";
$con->query($query);
$sqlCreateTable = "CREATE TABLE IF NOT EXISTS categories{
id INT(9) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR (255),

}";
if($con->query($sqlCreateTable)){
    echo "Table Created";
}else{
echo $con->error;
}




