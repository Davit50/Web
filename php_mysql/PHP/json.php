<?php
	$user =['name','surname'];
	$jsonobj = '{"Peter" : 20,"Davit" : 37}';
	$user_encoded = json_encode($user);
	$decodedObj = json_decode($jsonobj);
// var_dump($decodedobj->Peter);
foreach($decodedObj as $key => $obj){
echo ($key);
echo ($obj);
}

// var_dump($user_encoded);
?>
<script>

let data {"Peter" : 20,"Davit" : 37};
let JsonString =Json.stringify(data);
let jsonParced =Json.parse(jsonString);

</script>