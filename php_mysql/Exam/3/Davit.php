<?php
//1) 2. public, protected, private
//2) 3․ protected մեթոդը կամ փրոփրթին հասանելի են միայն տվյալ class-ի ու նրա ժառանգների համար
//3)   1․—destruct մեթոդը կանչվում է  միայն իրեն դիմելուց հետո
//	2․— destruct մեթոդը կանչվում է class-ը new անելուց հետո
//4) 2․ abstract class – ը կարող է ունենալ ռեալիզացրած մեթոդներ
//

//5․ Գործնական ընդհանուր առաջադրանք
//Ունենալով Calculator class-ը և օգտագործելով php trait պետք է՝
//	Ունենալ մեթոդներ php trait-ներում, որոնց փոխանցելով երկու թվեր որպես
// մեթոդների parameter ,ստուգել, եթե թվերը int տիպի են և կենտ են հաշվել տվյալ թվերի
// արտադրյալը  և գումարը , ընդ որում ամեն մաթեմատիկական գործողության համար օգտագործել առանձին trait առանձին մեթոդով ։

include 'TraitExample.php';
include 'TraitExampleTwo.php';


 class Calculator{
     use TraitExample, TraitExampleTwo;
 }

$Calculator = new Calculator();
$Calculator->gumarum(1,7);
$Calculator->bazmapatkum(1,3);

?>