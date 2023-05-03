<?php

 $letters = 'abcde';
 $pieces = explode(" ", $letters);

 function letters() {
     global $letters;
     if (is_string($letters)) {
         echo 'chishte <br>';
     }elseif (!is_string($letters)) {
         echo 'sxale';
     } else {
         echo 'other';
     }
     $isString = is_string($letters) ? var_dump('asd') : !is_string($letters) ? var_dump('asd') : '';
     echo substr($letters,0,1) . '<br>';
     echo substr($letters,2,1) . '<br>';
     echo substr($letters,4,1);
 }
 letters();

?>