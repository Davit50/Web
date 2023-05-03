<?php
include '../config.php';
$con = new mysqli(DB_HOST,DB_USER_NAME,DB_PASSWORD);

if ($con->connect_error) {
    echo 'Db Failed : ' . $con->connect_error;
    die;
}
$sqlUseDb = "USE test_db";
$con->query($sqlUseDb);



//$sql = 'SELECT * FROM test_table1';
////$sql = 'SELECT name,comment FROM test_table1';
//$result = mysqli_query($con,$sql);
//$data = [];
//if(mysqli_num_rows($result) > 0) {
//    while ($row = mysqli_fetch_assoc($result)) {
//        $data[] = $row;
//    }
//}

$name = 'name';
//$sql = "SELECT DISTINCT name FROM test_table1 WHERE name = '{$name}';";
//$sql = "SELECT COUNT(name) FROM test_table1 WHERE name = '{$name}';";
$sql = "SELECT id,name FROM test_table1 WHERE id >= 1 AND id <= 10;";
//$sql = "SELECT id,name FROM test_table1 WHERE NOT id = 1 AND NOT id = 2 OR name = 'TEST4';";
//$sql = "SELECT id,name FROM test_table1 WHERE name = 'name' AND comment = 'comment';";
//$sql = "SELECT id,name FROM test_table1 WHERE NOT id = 1 ORDER BY id ASC;";
//$sql = "DELETE FROM test_table1 WHERE name = 'BBB' OR name = 'DOG';";
//$sql = "UPDATE test_table1 SET name = 'DOG',comment = 'qwerty',status = 'aaa' WHERE id = 3 OR id = 5;";
//$sql = "SELECT name FROM test_table1 WHERE name LIKE 'sada%' OR comment LIKE '%a'";
$data = implode("','",['name','TES3','asdasdadsd','asdsadasd']);
//$sql = "SELECT name FROM test_table1 WHERE name IN ('{$data}')";
$sql = "SELECT id,name FROM test_table1 WHERE id BETWEEN 3 AND 8";
$sql = "SELECT id,name FROM test_table1 WHERE id NOT BETWEEN 3 AND 8";

$data = [];
$result = $con->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
            $data[] = $row;
    }
}
var_dump($data);die;
//if (!empty($data)) {
//
//}
