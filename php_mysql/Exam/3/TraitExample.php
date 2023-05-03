<?php
trait TraitExample {
public function gumarum($first,$second) {
    if(is_int($first) & is_int($second) & $first % 2 !==0 & $second % 2 !==0)
    {echo $first + $second;}
    else {echo 'error';}
}
    }


?>