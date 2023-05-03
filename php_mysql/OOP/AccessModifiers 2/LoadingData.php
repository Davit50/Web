<?php

include 'Child.php';
//include '../../../config.php';
include '../../../config.php';
//include 'Dad.php';
//$dad = new Dad('180','Blue');
//$dad->
//echo Config::PASSWORD . '<br>';
//echo Config::USER_NAME . '<br>';
//echo Config::DB_NAME .'<br>';
//echo Cong::USER_NAME;
//echo USER_NAME;
//$child = new Child('32423');
//$child->weight = '32423';
//echo $child->getAllFieldsTogether('child');
$dad = new Dad('180','red','asdas');
echo $dad->getAllFieldsTogether('dads');
//$dad->

//$child->

//$child->getAllData(); // OK
//$child->setHairColor('red'); // OK
//$child->setHairColorProtected('red'); // ERROR
//$child->setHairColorPrivate('red'); // ERROR
//var_dump($dad);


