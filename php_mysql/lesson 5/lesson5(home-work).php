<?php

$a = " 78, 60, 62,  71, 85, 66, 81, 76,  
68, 72, 73, 65, 74, 63, 67, 64, 75, 79";


print_r (explode(" ",$a));
$c = (explode(",",$a));

echo $c
?>
<hr>
<?php
$d = array_sum($c);
$f = count($c);
$e = $d/$f;
echo $d;
?>
<hr>
<?php
echo $e;
?>
<hr>
<?php

sort($c);

 $clength=count($c);
for($x=0;$x<$clength;$x++)
  {
  echo $c[$x];
  echo "<br>";
  } 
  ?>
  <hr>
  <?php
  
  for($y=0;$y<5;$y++){
	  echo $c[$y] . "<br>";
  }
  

  for($y=$f;$y>=$f-5;$y--){
	  echo $c[$y];
	  
  }
  
  
  
  
?>

