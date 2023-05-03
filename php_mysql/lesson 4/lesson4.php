<?php
//Array Methods

$a1 = ['a' => 'red','b' => 'green' ,'color' => 'blue','d' => 'yellow'];
$a2 = ['e' => 'red','b' => 'green' ,'d' => 'blue'];
$a3 = ['123','abc','12345','abcd'];
$a4 = ['a','b','c','d'];

//$result = array_diff($a1,$a2);
//$result = array_diff_assoc($a1,$a2);
//$result = array_diff_key($a1,$a2);
//$result = array_key_exists('er',$a1);
//$result = array_keys($a1);

/* function myfunc($num) {
    return ($num . '_' . 'value');
}
$a = array_map('myfunc',$a3);
var_dump($a);

$res = array_merge($a3,$a4);

$res = array_pop($a4);
var_dump($a4);
$res = array_shift($a4);
var_dump($res); */



$c = 1;
$d = 2;
function gumarumTest($a ,$b) {
    global $c,$d;
    $d = $c + $a + $b;
}

gumarumTest(3,4);
var_dump($d);

