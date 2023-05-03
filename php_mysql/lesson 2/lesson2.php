<?php

//String methods
$sting = 'Hello world';
$length = strlen($sting);
$word = str_word_count($sting);
$rev = strrev($sting);
$pos = strpos($sting,'world');
$rep = str_replace('world','all',$sting);
echo $sting . ' length '.$length . '<br>';
echo $sting . ' word count is '.$word . '<br>';
echo $sting . ' position is '.$pos. '<br>';
echo $sting . ' reverse is '.$rev. '<br>';
echo $sting . ' replace is '.$rep;

/* //Numbers
?>
<!--<h1>Numbers</h1>-->
<?php
$number = '12';
$other_number = 12;
var_dump($number = $number);
$number++;
++$number;
echo ++$number;
var_dump(is_int($number));

function testFunctionNumber() {
    global $number,$other_number;
    if (is_int($number)) {
        $GLOBALS['number'] = $GLOBALS['number'] + $GLOBALS['other_number'];
        $number = $number + $other_number;
    } else {
        print 'Not A Number';
        return false;
    }
    return true;
}
$testfunc = testFunctionNumber();
var_dump($testfunc)
echo $number;
 */
