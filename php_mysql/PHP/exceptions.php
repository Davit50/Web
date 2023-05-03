<?php

//use
function division($first_num,$second_num){
	if($second_num == 0){
		throw new Exception('Number can not be Zero');
	}
	return $first_num / $second_num;
}
//echo division('10','2 ');
//echo 'hello';

try{
	echo division(10,0);
}catch(\MongoDB\Driver\Exception\ExecutionTimeoutException $e){
	echo 'code Executed';
}finally{
	echo 'code Exception' ;
}

?>
 
 
 
 