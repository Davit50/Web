<?php


/* 1․ Տարբերակներից որո՞նք են ճիշտ․
•	PHP փոփոխականը կարող է սկսվել  միայն ‘$’, ‘_’ , ‘$$’ նշաններով,
•	Փոփոխականի անունը  կարող է սկսվել թվային նիշով,
•	Փոփոխականի անունը կարող է պարունակել միայն տառային, թվային և ընդգծված նիշերը (A-z, 0-9, և _ )
•	$echo և  EcHo այս երկու keyword-ները կատարում են նույն գործողությունը
2․ Արդյո՞ք կարող ենք երկու տարբերակով էլ հայտարարել string տիպի փոփոխական “ ”, ‘ ’
•	այո
•	ոչ
3.  Նշել թե որ գլոբալ փոփոխականի միջոցով կարելի է ստանալ request-ի տվյալները ամբողջությամբ (Օր․ (ip_address,request method և այլն))
•	$_POST
•	$_GET
•	$_REQUEST
•	$_SERVER
4․ Գրել script որը մեզ ցույց կտա տվյալ ստրինգի մեջ "I love php, I love too!" թե  php բառը ստրինգի որ ինդեքսից է սկսվում․
5․ Գրել PHP script` որը զանգվածից կստանա ամենակարճ և ամենաերկար բառերի  երկարությունը․  (“Abcd”, “abc”, “de”, “hjjj”, “g”, “wer”)
6. Գրել PHP script որը զանգվածի բոլոր տարրերը կդարձնի մեծատառ(strtoupper)․(“GreeN”, “YelLow”, “WhiTe”, “BLack”, “GrEY”)
7. Գրել PHP script որը կտպի 11.4.1987  տվյալ տարեթվից 6 տարի 1 ամիս  հետոյի ամսաթիվը
8. Դարձնել տվյալ զանգվածը string և սորտավորել այն ըստ արժեքների [“Gevorg”,”Armen”,”Armine”,”Ani”,”Anna”,”Petros”]
9. Պետք է ունենալ ֆունկցիա ,որին փոխանցելով զանգված[“One”,”Two”,3,”Four”,”5”] այն պետք է ստուգի արդյոք զանգվածի անդամները string տիպի են , ու եթե ճիշտ է, ամեն անդամին ավելացնի “_val” մասնիկը և  ավելացնի նոր զանգվածի մեջ ,նոր զանգվածը պետք է լինի ֆունկցիայի բլոկից դուրս
 */
/* 1 


•	Փոփոխականի անունը կարող է պարունակել միայն տառային, թվային և ընդգծված նիշերը (A-z, 0-9, և _ )

		
2

•	այո

3

•	$_REQUEST

*/


/* 4

$a = "I love php, I love too!" ;
$pos = strpos($a,'php');
echo $pos; */


/*  5
$arr = array("Abcd", "abc", "de", "hjj", "g", "wer");

$data = array_map('strlen',$arr);
min($data);
max($data);
/* $a = strlen('asdf');
 
 function strLen($item){
	 return strlen($item);
	 
 } */ 
/* 6

$c = array("GreeN", "YelLow", "WhiTe", "BLack", "GrEY");
foreach( $c as $d){
print_r (strtoupper($d . ", "));
} */

 


// 7

$a = '11.4.1987';
$strDate = strtotime("+ 6 years +1 month" , strtotime($a));
$date = date("Y-m-d H:i:s",$strDate);
echo($date);

/*
8

 $a = ["Gevorg","Armen","Armine","Ani","Anna","Petros"];
$b = implode(" ",$a);
echo str_word_count($b);
 */
 
/*  //9
 
 $check = [12,15,"13",17,14.5,"43a","as"];
 $newarray=[];
 function my(){
	 global $check;
	 foreach($check as $a){
		 if(is_int($a)){
			 $a=$a*2;
			 $newarray[]=$a;
			 var_dump($newarray);
		 }
	 }
	 
 }
 
 my(); */
?>