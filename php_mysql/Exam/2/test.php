 <?php
 
/*   //1

FileSystem-ի basename() մեթոդը վերադարձնում է միայն ֆայլի անունը 
fopen() մեթհթդին փոխանցելով x պարամետրը վերադարձնում է false եթե ֆայլը գոյություն ունի 
 
 
// 2 
 
  $myfile =fopen("data.txt","a+");
$data = $data . "This is simple txt file!";
fwrite($myfile,$data);
fclose($myfile);

$size = filesize("data.txt");
echo 'the filesize is -' . $size;







//3

setcookie('example',json_encode(['token' => 'afsfsf']),time() + 3600;

if(isset($_COOKIE['example']) {
var_dump($_COOKIE['example']);
}

 
 $strDate = strtotime("tomorrow");
$date = date("Y-m-d H:i:s",$strDate);

session_start();
$_SESSION['data'] = '$date';
session_destroy();  



  //4
  $post = [
            "name"     =>  $_POST["name"],
            "surname"  => $_POST["surname"],
			"password" => $_POST["password"],
		
        ];
		 
  $myfile=fopen("test.txt","w");
  fwrite($myfile,json_encode($post));
  fclose($myfile);
  echo file_get_contents('test.txt');
  
  
  
  //5
  

*/


if(move_uploaded_file($_FILES["file"]["tmp_name"],$_FILES['file']['name'])){
	echo $_FILES['file']['name'];
}
  
?>
 


