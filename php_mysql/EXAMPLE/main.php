<!DOCTYPE html>
<html>
<head>
    <title>Davit</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="images/img1.jpg" rel="shortcut icon type=" image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

</head>
<body>

<?php include('menu.php')  ?>

<div class="window" id="window">
    <?php
    $prod = array(
        array(
            'name' => 'phone 1',
            'price' => '10$',
            'image' => 'img1.jpg'
        ),
        array(
            'name' => 'phone 2',
            'price' => '20$',
            'image' => 'img2.jpg'
        ),
        array(
            'name' => 'phone 3',
            'price' => '15$',
            'image' => 'img3.jpg'
        ),
        array(
            'name' => 'phone 4',
            'price' => '40$',
            'image' => 'img4.jpg'
        ),
        array(
            'name' => 'phone 5',
            'price' => '55$',
            'image' => 'img5.jpg'
        )
    );
    foreach ($prod as $k):

    ?>

<div class="prod">
    <h1 class="hh">
        <?php echo $k['name'] ?>
    </h1>
    <div>
        <img src="images/<?php echo $k['image'] ?>" alt="image" class="image_">
        <h2 class="price"><?php echo $k['price'] ?></h2>
        <button class="btn"><a href="images/<?php echo $k['image'] ?>" download>Buy now<a></button>
    </div>
</div>

<?php endforeach;?>
</div>


<?php require('foot.php')  ?>

</body>
</html>