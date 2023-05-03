<?php
include 'ParentAbstract.php';
include 'Bomby.php';
include 'Chalo.php';

$boby = new Bomby('bomby');
$chalo = new Chalo('chalo');
echo $boby->getName();
echo $chalo->getName();
?>