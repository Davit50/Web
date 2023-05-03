<?php 
  function val_sort(){
require 'require.php';

asort($d);
echo "<h4>sorted by values</h4> ";
foreach ($d as $key => $value)
{
	echo $key . "=>" . $value;
	echo "<br />";
}

  }
  
 val_sort();


 ?>