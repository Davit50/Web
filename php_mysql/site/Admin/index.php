<?php include_once 'send.php' ?>
<!DOCTYPE html>
<html>
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

        a {
            text-decoration: none;
            color: white;
        }

        table image {
            height: 100px;
            width: 100px;
            border: 5px double #656161;
        }

        textarea {
            resize: vertical;
            max-height: 200px;
        }


        /*textarea { resize: horizontal;*/
    </style>
</head>
<body>
<form method="post" enctype="multipart/form-data" action="add.php">
    <label>Name:</label>
    <input type="text" name="name">

    <label>Price:</label>
    <input type='number' name="price">

    <label>Description:</label>
    <textarea name="description"></textarea>

    <input type="file" name="image">
    <input type="submit" name="btn">
</form>
<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Price</th>
        <th>Description</th>
        <th>Image</th>

    </tr>
    <?php
    $sql = "SELECT * FROM `products`";
    $query = mysqli_query($conn, $sql);

    $items = mysqli_fetch_all($query);

    foreach ($items as $item):
        $img = base64_encode($item[3])
        ?>
        <tr>
            <td><?php echo $item[0] ?></td>
            <td><?php echo $item[1] ?></td>
            <td><?php echo $item[2] ?></td>
            <td><?php echo $item[4] ?></td>
            <td><img src="data:image/jpeg;base64,<?php echo $img ?>"></td>
            <td><a href="delate.php?id=<?php echo $item[0] ?>">Delate</a></td>
            <td><a href="update.php?id=<?php echo $item[0]; ?>">Update</a></td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>