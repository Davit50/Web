 <?php
include_once 'send.php';

$id = $_GET['id'];

$sql = "SELECT * FROM `products` WHERE `id`='$id'";
$result = mysqli_query($conn, $sql);
$product = mysqli_fetch_assoc($result);



?>
<head>
	<title>Example</title>
	<style>

		body {
			display: flex;
			align-items: center;
			justify-content: center;
			min-height: 50vh;
			font-family: arial, sans-serif;
			background-color: #898b8d;
			flex-direction: column;
		}
		input, textarea {
			display: block;
			width: 300px;
			font-size: 18px;
			margin: 7px 0px;
		}
		label {
			display: block;
			padding: 2px 0px;
		}
        textarea {
            resize: vertical;
            max-height: 200px;
        }

	</style>
</head>

    <form method="post" action="updateb.php">
    	<label>Name:</label>
    	<input type="hidden" name="id" value="<?php echo $product['id'];?>">
    	<input type="text" name="name" value="<?php echo $product['name'];?>">

    	<label>Description:</label>
        <textarea type="text" name="description" placeholder="<?php echo $product['description'];?>"></textarea>

    	<label>Price:</label>
        <input name="price" type='number' value="<?php echo $product['price'];?>">


    	<input type="submit" name="btn" value='Update'>
    </form>

