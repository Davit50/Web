<?php
if (isset($_POST['btn'])) {
    include_once 'send.php';
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));

    $sql = "INSERT INTO products(`name`, `price`, `image`, `description`) VALUES('$name', '$price', '$image','1')";

    mysqli_query($conn, $sql);
    mysqli_close($conn);

} else {
    header("location:error404.php");
}




