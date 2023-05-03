<?php

include '../confiq.php';
$con = new mysqli (DB_HOST,DB_USER_NAME,DB_PASSWORD);


if($con->connect_error){
    echo 'Db Failed :' . $con->connect_error;
    die;
}
//$sql="SELECT * FROM test_table1";
////$sql = "SELECT name,comment FROM test_table1";
//$result = $con->query($con,$sql);
//$data = [];
//if(mysqli_num_rows($result) >0) {
//    while($row = mysqli_fetch_assoc($result)){
//        $data[] = $row;
//    }
//}



$sql="SELECT * FROM test_table1";
$result = $con->query($sql);
if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        if($row['name']  == 'TEST1'){
            $data[]=$row;
        }
    }
}
