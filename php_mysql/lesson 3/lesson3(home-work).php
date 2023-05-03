 <?php

$a1=array("a"=>"Привет","b"=>"мир","c"=>" ! ");
$a2=array("a"=>" Пока ");
array_splice($a1,0,1,$a2);
print_r($a1);
?>
<hr>
<?php
array_push($a1,"Здраствуйте");
print_r($a1);

?>
<hr>
<?php
foreach ($a1 as $b){
echo $b;}
?> 
<br>
<br>
<br>
<?php

 $names = ['Anna'=>'1000$', 'Arman'=>'500$', 'Gevorg'=>'200$']; 

foreach ($names as $name => $number){
echo $name . '=' . $number . '<br>';}

switch($names){
	case "Anna":
	echo '$number[0]';
	break;
	case "Arman":
	echo '$number[1]';
	break;
	case "Gevorg":
	echo '$number[2]';
	break;
	default :
	echo "error";
    } 
    
    
?>
