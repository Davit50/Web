<!DOCTYPE html>
<html>
<head>
	<title>Responsive Design</title>
	<link rel="stylesheet" type="text/css" href="css/resp.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">

		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
</head>
<body style="background: #8080802e;">

	 <div class="nav slideInDown">
      <ul>
        <li class="home"><a class="active" href="#">Home</a></li>
        <li class="portfolioNav"><a href="#photos">Portfolio</a>
          <ul class="item">
            <li><a class="item" href="#i1">python</a></li>
            <li><a class="item" href="#i2">web</a></li>
            <li><a class="item" href="#i3">hacking</a></li>
          </ul>
        </li>
        <li class="about"><a href="about.php">About</a></li>
        <li class="contact"><a href="product.php">Product</a></li>
        <li class="contact"><a href="#foot">Contact</a></li>
      </ul>
    </div>




    <div class="bg">
	<h1>learn learn learn...</h1>

</div>


<div id="photos"></div>


<h3>Portfolio</h3>
<div id = 'i1' class="portfolio">
	<div class="img bg1">
		<h2>Python game</h2>
		
		<button  class="but"><a target="_blank" href="https://github.com">See More</a></button>
	</div>
	<div id = 'i2' class="img bg2">
		<h2>Web development</h2>
		<button  class="but"><a target="_blank" href="https://github.com">See More</a></button>
	</div>
	<div id = 'i3' class="img bg3">
		<h2>hacking</h2>
		<button  class="but"><a target="_blank" href="https://github.com">See More</a></button>
	</div>
</div>

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

				<p class="footer-company-name">Company Name &copy; 2020</p>

				<div class="footer-icons">
					<a target="_blank" href="https://www.facebook.com/davit.badishyan/"><i class="fa fa-facebook"></i></a>
					<a target="_blank" href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
					<a target="_blank" href="https://www.linkedin.com/ "><i class="fa fa-linkedin"></i></a>
					<a target="_blank" href=" https://github.com/Davit50"><i class="fa fa-github"></i></a>

				</div>

			</div>

			<div class="footer-right">

				<p>Contact Us</p>

				<form action="#" method="post">

					<input id = 'email' type="text" name="email" placeholder="Email" />
					<textarea id = 'message' name="message" placeholder="Message"></textarea>
					<button>Send</button>

				</form>

			</div>

		</footer>

</body>
</html>