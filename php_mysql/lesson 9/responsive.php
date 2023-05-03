<!DOCTYPE html>
<html>
<head>
	<title>Responsive Design</title>
	<link rel="stylesheet" type="text/css" href="resp.css">
<link href="Davit.png" rel="shortcut icon type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">

		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
</head>
<body>

	 <div class="nav slideInDown">
      <ul>
        <li class="home"><a class="active" href="#">Home</a></li>
        <li class="portfolioNav"><a href="#photos">Portfolio</a>
          <ul class="item">
            <li><a class="item" href="#">Item 1</a></li>
            <li><a class="item" href="#">Item 2</a></li>
            <li><a class="item" href="#">Item 3</a></li>
          </ul>
        </li>
        <li class="about"><a href="about.php">About</a></li>
        <li class="books"><a href="books.php">Books</a>
          <ul>
            <li><a class="item" href="#">Item 1</a></li>
            <li><a class="item" href="#">Item 2</a></li>
            <li><a class="item" href="#">Item 3</a></li>
          </ul>
        </li>
        <li class="contact"><a href="#foot">Contact</a></li>
      </ul>
    </div>

    <div class="bg">
	<h1>the food like an art...</h1>
	<button class="top">Our Photos</button>
</div>


<div id="photos"></div>


<h3>Portfolio</h3>
<div class="portfolio">
	<div class="img bg1">
		<h2>Drinks</h2> 
		
		<button class="but">See More</a></button>
	</div>
	<div class="img bg2">
		<h2>Salads</h2>
		<button class="but">See More</button>
	</div>
	<div class="img bg3">
		<h2>Sweets</h2>
		<button class="but">See More</button>
	</div>
</div>

<?php

require "./footer.php"
?>

		
</body>
</html>