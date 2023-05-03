<?php

include '../config.php';
$con = new mysqli (DB_HOST,DB_USER_NAME,DB_PASSWORD);


if($con->connect_error){
    echo 'Db Failed :' . $con->connect_error;
    die;
}
//$sql="SELECT * FROM test_table1";
//$result = $con->query($sql);
//if($result->num_rows > 0) {
//    while($row = $result->fetch_assoc()){
//        if($row['name']  == 'TEST1'){
//            $data[]=$row;
//        }
//    }
//}


//$name ="TEST1";
//$sql= "SELECT DISTINCT name FROM test_table1 WHERE name='{$name}';";
//$sql= "SELECT COUNT(name) FROM test_table1 ";
//$sql= "SELECT id,name FROM test_table1 WHERE id=1 OR name ='TEST4';";
//$sql= "SELECT id,name FROM test_table1 WHERE NOT id=1 AND NOT id ='2';";
//$sql= "SELECT id,name FROM test_table1 WHERE id=1 AND id='2';";
//$sql= "SELECT id,name FROM test_table1 WHERE id > 1 ORDER BY name DESC;";
//$sql = "DELETE FROM test_table1 WHERE  name = 'BBB';";
//$sql = "UPDATE Test_table1 SET name='Dog',comment='abc',status='online' WHERE id = 3 OR id = 5;";
//$sql = "SELECT name FROM test_table1 WHERE name LIKE 'TEST%'";
//$result = $con->query($sql);
//if($result-num_rows > 0){
//    while($row = $result->fetch_assoc()){
//        $data[]= $row;
//    }
//
//}
//json_encode($data);die;