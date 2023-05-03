<?php
if (isset($_POST['name']) && isset($_POST['price'])) {
    $conn = mysqli_connect("localhost", "root", "root", "test_db");

    if (!$conn) {
        echo "Connection failed!";
        exit();
    }

	$name = $_POST['name'];
	$price = $_POST['price'];

	if (empty($price) || empty($name)) {
		header("Location: index.html");
	}else {

		$sql = "INSERT INTO products(name, price) VALUES('$name', '$price')";
		$res = mysqli_query($conn, $sql);
//		var_dump($res);die;


		if ($res) {
			echo "Your message was sent successfully!";
		}else {
			echo "Error";
		}
	}

}else {
	header("Location: index.html");
}