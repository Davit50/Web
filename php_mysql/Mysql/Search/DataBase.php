<?php


include '../config.php';


$d = json_encode($_POST);
var_dump($d);


$con = new mysqli(DB_HOST,DB_USER_NAME,DB_PASSWORD);
$con->query("USE test_db");

$sql="SELECT name FROM Search WHERE name LIKE '$d% ' ";
$result = mysqli_query($con,$sql);
$data = [];
if(mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
}
var_dump($data);