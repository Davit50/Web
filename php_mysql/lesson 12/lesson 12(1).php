<?php 
  function key_sort(){

require 'require.php';

ksort($d);
echo "<h4>sorted by keys</h4> ";
foreach ($d as $key => $value)
{
	echo $key . "=>" . $value;
	echo "<br />";
}

  }
  
 key_sort();


 ?>