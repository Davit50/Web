<!DOCTYPE html>
<html style="background: #8080802e;">
<head>
    <title>Davit</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<!--    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">-->

</head>
<body>

<div class="nav slideInDown">
    <ul>
        <li class="home"><a href="responsive.php">Home</a></li>
        <li class="portfolioNav"><a href="#window">Portfolio</a></li>
        <li class="about"><a href="about.php">About</a></li>
        <li class="about"><a class="active" href="#">Product
            </a></li>
        <li class="contact"><a href="#foot">Contact</a></li>
    </ul>
</div>


<div class="window" id="window">
    <?php
    $conn = mysqli_connect('localhost', 'root', 'root', 'davit');
    $sql = "SELECT * FROM `products`";
    $query = mysqli_query($conn, $sql);
    $items = mysqli_fetch_all($query);

    foreach ($items

             as $item):
        $img = base64_encode($item[3])
        ?>


        <div class="prod" style="height: 560px;">
            <h1 class="hh">
                <?php echo $item[1] ?>
            </h1>
            <div>
                <img src="data:image/jpeg;base64,<?php echo base64_encode($item[3]) ?>" alt="image" class="image_">
                <h2 class="price"><?php echo $item[2] ?></h2>
                <hr>
                <h2 class="price"><?php echo $item[4] ?></h2>

                <button class="btn"><a href="data:image/jpeg;base64,<?php echo base64_encode($item[3]) ?>" download>Buy
                        now<a></button>
            </div>
        </div>


    <?php endforeach; ?>

    <footer class="footer-distributed" id="foot">
        <div class="footer-left">
            <h3 style="text-align: center">Badishyan<span>Davit</span></h3>
            <p class="footer-links">
                <a href="#">Home</a>
                ·
                <a href="#">Blog</a>
                ·
                <a href="#">Pricing</a>
                ·
                <a href="#">About</a>
                ·
                <a href="#">Faq</a>
                ·
                <a href="#">Contact</a>
            </p>
            <p class="footer-company-name">Badishyan Davit &copy; 2021</p>
            <div class="footer-icons">
                <a target="_blank" href="https://www.facebook.com/davit.badishyan/"><i class="fa fa-facebook"></i></a>
                <a target="_blank" href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                <a target="_blank" href="https://www.linkedin.com/ "><i class="fa fa-linkedin"></i></a>
                <a target="_blank" href=" https://github.com"><i class="fa fa-github"></i></a>
            </div>
        </div>
        <div class="footer-right">
            <p>Contact Us</p>
            <form action="MAILTO:davitbadishyan50@gmail.com" method="post">
                <input id = 'email' type="text" name="email" placeholder="Email">
                <textarea id = 'message' name="message" placeholder="Message"></textarea>
                <button>Send</button>
            </form>
        </div>
    </footer>

</body>
</html>