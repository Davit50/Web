<?php
/* Kunenanq masiv ['first' => 1,'second' => 15,"third" => "asdas","forth" => "vv","fifth" => "asdqw","sixth" => 45];
Foreach I ognutyamb petqe masivi elementnery qcenq data.txt fiel I mej hetevyal tesqov 
(orinak key : first value : 1) ….data.txt filey petqe sarqvi Avtomat vory ir hertin petqe lini "data" anunov 
papki mej … papken petqe sarqenq fileSystemi methodneri ognutyamb stugelov ete goyutyun chuni  */

		$curdir = getcwd();
		if(mkdir($curdir . "/data" )){
			echo "<h1>folder has been created successfully</h1>";
		}
		else{ echo "<h1>failed to create directory</h1>";}


$a =  ['first' => 1,'second' => 15,"third" => "asdas","forth" => "vv","fifth" => "asdqw","sixth" => 45];
foreach($a as $k => $v){


	$myfile =fopen("../lesson 14/data/data.txt","a+");
	$data =   $k . " => " . $v ;
	fwrite($myfile,$data);
	fclose($myfile);
	
	
}


?>