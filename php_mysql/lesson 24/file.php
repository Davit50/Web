<?php


        $post = [
            "name"     =>  $_POST["name"],
            "surname"  => $_POST["surname"],
			"password" => $_POST["password"],
			"file" => "Image.png"
        ];
		
  $myfile=fopen("test.txt","w");
  fwrite($myfile,json_encode($post));
  fclose($myfile);
  echo file_get_contents('test.txt');
  
  

  
  

?> 


