<?php
include '../config.php';
$con = new mysqli(DB_HOST,DB_USER_NAME,DB_PASSWORD);

if ($con->connect_error) {
    echo 'Db Failed : ' . $con->connect_error;
    die;
}
$sqlCommand = "CREATE DATABASE IF NOT EXISTS test_db";
//
//if($con->query($sqlCommand)) {
////    echo "Db Created";
//}else {
////    echo "Error during creation db : " . $con->error; ;
//}

$sqlUseDb = "USE test_db";
$con->query($sqlUseDb);
//
//$sqlCreateTable = "CREATE TABLE users (
//id INT(9) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//email VARCHAR (255)
//status ENUM('offline','online') DEFAULT 'online'
//)";
//if($con->query($sqlCreateTable)) {
//    echo "Table Created";
//}else {
//    echo "Error during creation table : " . $con->error; ;
//}




/**
 * Data types
 * BIT () - 1 - 64)
 * VARCHAR(255)
 * TINYTEXT(255)
 * TEXT(65200)
 * MEDIUMTEXT(16.000.000)
 * LONGTEXT(4.220.000.000)
 * INT(1) - 2000000000
 * BIGINT (15) - -900000000000000 - 900000000000000
 * SMALLINT()
 * BOOLEAN - BOOL - 0 100
 * TINYINT() -127 - 127
 * FLOAT(11,5) - 215000000.255
 * DOUBLE(9,5) - 215000000.2
 * ENUM('1','2','3')
 * DATE
 * DATE_TIME
 */



$sqlUseDb = "USE test_db";
$con->query($sqlUseDb);

$sqlCreateTable = "CREATE TABLE IF NOT EXISTS test_table1 (
id INT(9) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(255) NOT NULL,
comment TEXT,
date DATE DEFAULT '2020-12-12',
status ENUM ('offline','online') DEFAULT 'online'
)";

//$con->query($sqlCreateTable);
//if($con->query($sqlCreateTable)) {
//        echo "Table Created";
//}else {
//    echo "Error during creation table : " . $con->error; ;
//}
$date = date('Y-m-d');
$date = '2020-12-12';
$insertSql = "INSERT INTO test_table1 (name,comment,date,status) VALUES (";
if ($date) {
    $insertSql .= htmlspecialchars("<script>alert('asdas')</script>");
}
$insertSql .= 'TEST2)';
$insertSql .=  "INSERT INTO test_table1 (name,comment,date,status) VALUES ('TEST2','MY TEST COMMENT',CURRENT_TIMESTAMP,'online');";
//$insertSql .= "INSERT INTO test_table1 (name,comment,date,status) VALUES ('TEST3','MY TEST COMMENT',CURRENT_TIMESTAMP,'online');";
//$insertSql .= "INSERT INTO test_table1 (name,comment,date,status) VALUES ('TEST4','MY TEST COMMENT',CURRENT_TIMESTAMP,'online');";
//$insertSql = "INSERT INTO test_table1 (name,comment,date) VALUES ('TEST1','MY TEST COMMENT',CURRENT_TIMESTAMP)";

//$a = 'name';
//$b = 'comment';
//$c = '2020-11-11';

//$smtp = $con->prepare("INSERT INTO test_table1 (name,comment,date) VALUES (?,?,?);");
//$a = 'surnamr';
//$smtp->bind_param('sssi',$a,$b,$c);
//$smtp->execute();
//
//if ($con->query($insertSql)) {
//    echo "success";
//}else {
//    echo "error : " . $con->error;
//}

?>

