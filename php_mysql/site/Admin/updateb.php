<?php

include_once "send.php";
$name = $_POST['name'];
$id = $_POST['id'];
$price = $_POST['price'];
$description = $_POST['description'];
$sql = "UPDATE `products` SET `id`='$id',`name`='$name',`price`='$price',`description`='$description' WHERE `id` = '$id'";

mysqli_query($conn, $sql);
mysqli_close($conn);
//header("Location: index.php");