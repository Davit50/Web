<?php

include_once 'send.php';

$id = $_GET['id'];

$sql = "DELETE FROM `products` WHERE `id`='$id'";

mysqli_query($conn, $sql);
mysqli_close($conn);
