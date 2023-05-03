<?php
/* 
Mihat forma ksarqenq vory kunena hetevyal fieldery
"name","email","image",esorva orinaki pes nkary kpatkerenq js I ognutyamb html I vra u ed tvyalnery kuxarkenq backend...backendi mej validacianery stugelov.save kenenq nkary ,  kqcenq txti file I mej tvyalnery hetevyal tesqov 
name - reqesti meji namey 
email - requesti meji emaily
image - arden backendum save erac nkari pathy
petqe partadir stugel te upload exac filey jpeg kam jpg formati exni nor save enenq */ 



if(is_uploaded_file($_FILES["image"]["tmp_name"])){
	move_uploaded_file($_FILES["image"]["tmp_name"],"Image1.jpg");
}



 if($_FILES["image"]["type"]=="image/jpg"){
	echo 'true';
}
else{
	die;
} 



$post_arr = [];
$err_array = [];
 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['name'] == '') {
        $err_array['name'] = 'Name Field is Required';
    } else {
        $post_arr['name'] = $_POST['name'];
    }
   
    if ($_POST['email'] == '') {
        $err_array['email'] = 'Email Field is Required';
    } else {
        $post_arr['email'] = $_POST['email'];
    }
  
}

var_dump('Errors are',$err_array);
var_dump('Inputs are',$post_arr);
?>
<hr>
<?php

$myfile =fopen("file.txt","x+");
$h =  $post_arr['name'] . "\n" .   $post_arr['email'] . "\n" . $p . "\Image1.jpg";
$data = $data . $h;
fwrite($myfile,$data);
fclose($myfile);

?>