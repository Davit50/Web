<!DOCTYPE html>
<html>
<head>
	<title>Books</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="books.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="Davit.png" rel="shortcut icon type="image/x-icon">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
</head>
<body>

 <div class="nav slideInDown">
      <ul>
        <li class="home"><a href="responsive.php">Home</a></li>
        <li class="portfolioNav"><a href="responsive.php">Portfolio</a>
          <ul class="item">
            <li><a class="item" href="#">Item 1</a></li>
            <li><a class="item" href="#">Item 2</a></li>
            <li><a class="item" href="#">Item 3</a></li>
          </ul>
        </li>
        <li class="about"><a href="about.php">About</a></li>
        <li class="books"><a  class="active" href="#">Books</a>
          <ul>
            <li><a class="item" href="#">Item 1</a></li>
            <li><a class="item" href="#">Item 2</a></li>
            <li><a class="item" href="#">Item 3</a></li>
          </ul>
        </li>
        <li class="contact"><a href="#foot">Contact</a></li>
      </ul>
    </div>

<div class="books_1">
	<div class="book_child first">
		<h1 class="h1">Breakfasts</h1>
		<p class="p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat.</p>
		<span class="price">400<sup>RUB</sup></span>
		<button class="but">To Buy...</button>
	</div>
	<div class="book_child_2 first"> <img src="https://static.wixstatic.com/media/f61af8_0541e64c3f484138a15c42a0dc363911~mv2_d_5182_3780_s_4_2.png/v1/fill/w_600,h_438,al_c,q_85,usm_0.66_1.00_0.01/f61af8_0541e64c3f484138a15c42a0dc363911~mv2_d_5182_3780_s_4_2.webp" alt="book"> </div>
</div>

<div class="books">
	<div class="book_child">
		<h1 class="h1">sugar <br> & spices</h1>
		<p class="p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat.</p>
		<span class="price">350<sup>RUB</sup></span>
		<button class="but">To Buy...</button>
	</div>
	<div class="book_child_2"> <img src="https://static.wixstatic.com/media/f61af8_44e0a04431f84ab8ac9d22b2f77c9acf~mv2_d_5182_3780_s_4_2.png/v1/fill/w_600,h_438,al_c,q_85,usm_0.66_1.00_0.01/f61af8_44e0a04431f84ab8ac9d22b2f77c9acf~mv2_d_5182_3780_s_4_2.webp" alt="book"> </div>
</div>


<div class="books">
	<div class="book_child">
		<h1 class="h1">summer season dishes</h1>
		<p class="p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat.</p>
		<span class="price">350<sup>RUB</sup></span>
		<button class="but">To Buy...</button>
	</div>
	<div class="book_child_2"> <img src="https://static.wixstatic.com/media/f61af8_b6a9b3e151b44cb48f58651b716bee98~mv2_d_5182_3780_s_4_2.png/v1/fill/w_600,h_438,al_c,q_85,usm_0.66_1.00_0.01/f61af8_b6a9b3e151b44cb48f58651b716bee98~mv2_d_5182_3780_s_4_2.webp" alt="book"> </div>
</div>

<?php

require "footer.php"
?>


</body>
</html>