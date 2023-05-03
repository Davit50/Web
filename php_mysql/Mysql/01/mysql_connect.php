<?php
include '../config.php';
$con = new mysqli(DB_HOST,DB_USER_NAME,DB_PASSWORD);


//if($con->query("CREATE DATABASE IF NOT EXISTS test_db")) {
//    echo "Db Created";
//}else {
//   echo "Error during creation db : " . $con->error; ;
//}


//$con->query("USE test_db");

$sqlCreateTable = "CREATE TABLE users (
id INT(9) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
email VARCHAR (255),
status ENUM('offline','online') DEFAULT 'online'
)";
if($con->query($sqlCreateTable)) {
    echo "Table Created";
}else {
    echo "Error during creation table : " . $con->error; ;
}





/**
 * Data types
 * BIT () - 1 - 64)
 * VARCHAR(255)
 * TINYTEXT(255)
 * TEXT(65200)
 * MEDIUMTEXT(16.000.000)
 * LONGTEXT(4.220.000.000)
 * INT(11) - 2000000000
 * BIGINT (15) - -900000000000000 - 900000000000000
 * SMALLINT()
 * BOOLEAN - BOOL - 0 100
 * TINYINT() -127 - 127
 * FLOAT(11,5) - 215000000.2
 * DOUBLE(9,5) - 215000000.2
 * ENUM('1','2','3')
 */


$con->query("USE test_db");

$sqlCreateTable = "CREATE TABLE IF NOT EXIST test_table1{
id INT(9) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR  (255) NOT NULL,
comment TEXT,
status ENUM ('offline','online') DEFAULT 'online'
}";

$con->query($sqlCreateTable);



$insertSql ="INSERT INTO test_table1 (name,comment) Values('TEST1','MY TEST COMMENT')";


if($con->query($insertSql)){
    echo "success";
}
else{
    echo 'error : ' . $con->error;
}




//if (!$con) {
//    die("Connection failed: " . mysqli_connect_error());
//}
//$sql = "INSERT INTO users (username, password, email) VALUES ('Johny', 'Dawkins', 'johny@example.com');";
//$sql .= "INSERT INTO users (username, password, email) VALUES ('Margaret', 'Johnson', 'marg@example.com');";
//  $sql .= "INSERT INTO users (username, password, email) VALUES ('Juliete', 'Doodley', 'juliete@example.com');";
//  if (mysqli_multi_query($con, $sql)) {
//      echo "New records created successfully";
//  } else {
//      echo "Error: " . $sql . "<br>" . mysqli_error($con);
//  }
//  mysqli_close($con);


//$a = 'name';
//$b = 'comment';
//$c = '2020-11-11';
//
//
//$smtp = $con->prepare("INSERT INTO test_table1 {name,comment,date} VALUES (?,?,?) ;");
//$a="surname";
//$smtp->bind_param('ssi',$a,$b,$c);
//$smtp->execute();
//
//if($con->query($insertSql)) {
//    echo "success";
//}else{
//    echo "error :" . $con->error;
//}

