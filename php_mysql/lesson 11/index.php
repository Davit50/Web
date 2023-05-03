<!Doctype html>
<head>
    <meta charcet="utf-8">
	<title>php10</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<style>
	body{
	margin:0;
	padding:0;
}
.container{
	margin:0 auto;
	width:70%
}
.header{
	background-image:url(d.jpg);
	background-repeat:no-repeat;
	background-size:cover;
	height:441px;
	
}
.menu1{
	display:flex
}
.menu ul{
	display:flex;
}
.menu li{
	list-style:none;
	margin-left:4%;
	color:#2B3193;
	font-weight:800;
	font-size:23px;
}
.ulli{
	padding-left:27%
}
.menu1 p{
	color:white;
	font-size:20px
}
.menu1 span{
	color:#2B3193;
	font-size:27px
}
.fas{
    padding-top: 16px;
	color:white
}
.about h1{
	font-size:40px;
	color:white;
	text-align:center;
	padding-top:8%
}
.about p{
	text-align:center;
	color:white
}
.about span{
	color:orange
}

.block1{
	display:flex;
	margin-top:3%
}
.block1-text{
	width:48%;
	padding-top:4%
}
.block1-text p{
	color:grey
}
.block1-text input{
	color:white;
	background:orange;
	padding: 9px 23px 9px 23px;
    border-radius: 32px 35px;
	
}
.block1-image{
	width:48%;
}
.block1-image div{
	width:40%;
	height:599px;
	background:#526AC8;
    margin-left:60%;
    position:relative
}
.image{
   position:absolute;
   margin-top:-39%;
   margin-left:3%
}

.block2{
	display:flex;
	margin-top:5%
}
.block2-image{
	width:48%;
}
.block2-image div{
	width:40%;
	height:599px;
	background:#526AC8;
    position:relative
}
.image2{
  height:509px;
  width:31%;
  position:absolute;
  margin-top:-39%;
  margin-left:2%
}
.block2-text{
	width:48%;
	padding-left:4%;
	padding-top:2%
}
.block2-text p{
	color:grey
}
.block2-text-circle{
	display:flex;
}
.circle{
	height:50px;
	width:74px;
	border-radius:50%;
	background:blueviolet;
	margin-right:6%;
	margin-top:4%
}
.a{
	background:orange
}
.b{
	background:limegreen
}
.circle p{
	color:white;
	text-align:center
}

.block3{
	display:flex;
	margin-top:8%
}
.p1{
	color:grey
}
.icon{
	color:aquamarine;
	margin-right:1%
}
.icon-div{
	display:flex
}
.block3-text{
	margin-left:15%;
}
.block3-input1{
	background:white;
	color:black;
	border-radius: 32px 35px;
	padding: 9px 28px 9px 23px;
	position:relative;
	margin-top:10%;
	margin-left:13%
	
}
.block3-input2{
	background:orange;
	color:white;
	border-radius: 32px 35px;
	padding: 9px 23px 9px 23px;
	position:absolute;
	margin-left:-2%;
	margin-top:2%
}
.block3-image{
	width:40%;
	padding-left:6%
}
.inline{
	height:173px;
	width:54%;
	background:#526AC8;
	position:relative
}
.block3-image div{
	display:flex;
	position:absolute
}
.q{
	height: 340px;
    width: 27%;
    margin-top: 8%;
    margin-left: 5%
}
.w{
	height: 340px;
    width: 27%;
    margin-top: 8%;
    margin-left: 4%;
}
.e{
	height: 340px;
    width: 27%;
    margin-top: 8%;
    margin-left: 4%;
}
.iconq{
	font-size: 48px;
    margin-top: 24%;
    margin-left: -78%;
    color: white;
}
.iconw{
	font-size: 48px;
    margin-top: 24%;
    margin-left: 25%;
    color: white;
}
.icone{
	font-size: 48px;
    margin-top: 24%;
    margin-left: 25%;
    color: white;
}
.block4{
	display:flex;
	margin-top:9%
}
.block4-image{
	width:48%
}
.block4-image div{
	width:40%;
	height:599px;
	background:#526AC8;
    position:relative
}
.image4{
	height:509px;
  width:31%;
  position:absolute;
  margin-top:-39%;
  margin-left:2%
}
.block4-text{
	width:48%;
	margin-left:6%;
	margin-top:2%;
}
.block4-text p{
	color:grey;
	margin-top:7%
}
.twins1{
	margin-top:12%;
	width:41%;
	border:1px solid white;
	background:white;
	border-radius:6%;
	height:170px
}
.twins1 div{
	background:orange;
	height:38px;
	width:48px;
	margin-top: 11%;
    border-radius: 11%;
    margin-left: 12%;
	
}
.general{
	background:#F2F3F2
}
.block4-text-twins{
	display:flex
}
.icontwins1{
	margin-left: 32%;
    margin-top: 21%;
    color: white;
}
.twins1 h3{
	margin-left:10%
}
.twins1 p{
	margin-left:10%
}
.twins2 div{
	background:orange;
	height:38px;
	width:48px;
	margin-top: 11%;
    border-radius: 11%;
    margin-left: 12%;
}
.icontwins2{
	margin-left: 32%;
    margin-top: -9%;
    color: white;
}
.twins2{
	margin-top:12%;
	width:41%;
	border:1px solid white;
	background:white;
	border-radius:6%;
	height:170px;
	margin-left:7%
}
.twins2 h3{
	margin-left:10%
}
.twins2 p{
	margin-left:10%
}
.block5{
	margin-top:11%
}
.block5-text{
	margin-bottom:8%
}
.block5-text h1{
	text-align:center
}
.block5-text p{
	text-align:center;
	color:grey
}
.iconblock5{
	color:orange;
	font-size: 51px;
    margin-left: 38%;
	margin-top:9%
}
.block5-image div{
	background:white;
	box-shadow:-3px -7px 20px #EEE3F0;
	height:200px;
	width:23%;
	border-radius:3%
}
.block5-image{
	display:flex;
	justify-content:space-between
}
.block5-image h3{
	margin-left:25%
}
.block5-image p{
	color:grey;
	text-align:center
}

.block6{
	margin-top:11%
}
.block6-text{
	margin-bottom:5%
}
.block6-text h1{
	text-align:center;
	padding-top:7%
}
.block6-text p{
	text-align:center;
	color:grey
}
.block6-image{
	display:flex
}
.image6{
	height:305px;
	width:19%;
	margin-left:20%;
	border-radius:6%
}
.icon6{
	display:flex;
	justify-content:space-between;
	width:16%
}
.iconblock6{
	color:#F9CF92;
	font-size:30px;
	margin-top:-11%
}
.block6-div{
	padding-left:4%;
	width: 36%;    
}
.there{
	color:grey
}
.stars{
	display:flex;
	justify-content:space-between;
	width:30%
}
.starsblock6{
	color:#F3A010
}
.line{
	display:flex
}
.lin{
	color:#F3A010
}
.line h1{
	margin-left:3%;
	font-size:24px
}
.ux{
	margin-top: 9%;
    margin-left: -38%;
}
.square{
	display:flex
}
.square1{
	display:flex;
	width:18%;
	padding-left:9%
}
.iconsquare{
	color:#EFC67F;
	margin-left:11%;
	font-size:12px
}
.iconsquare:first-child{
	color:#F3A010
}
.square2{
	 display:flex;
	 padding-left:9%
}
.square2-a1{
	height:65px;
	width:97px;
	border:1px solid grey
}
.iconsquare2{
	color:orange;
	margin-left:38%;
	margin-top:5%;
	font-size:24px
}

.iconsquare1{
	color:grey;
	margin-left:38%;
	margin-top:5%;
	font-size:24px
}
.square2-a2{
	height:65px;
	width:97px;
	border-color:orange orange orange ;
	border-style:solid;
	border-width:1px
}
.block7-text{
	margin-bottom:5%
}
.block7-text h1{
	text-align:center;
	padding-top:7%
}
.block7-text p{
	text-align:center;
	color:grey
}

.block7-image{
	display:flex;
	justify-content:space-between
}
.img-block7{
	height:300px;
	width:24%;
	border-radius:8%
}
.imga7{
	filter:blur(1px);
	position:relative;
	
}
.a7{
	height: 169px;
    width: 18%;
    background: white;
    position: absolute;
    margin-left: 35%;
    margin-top: 10%;
    border-radius: 18%;
}
.a7 h1{
	font-size: 20px;
    text-align: center;
}
.a7 p{
	text-align: center;
    color: grey;
}
.a7 div{
	display:flex;
	justify-content: space-between;
    width: 37%;
    padding-left: 29%;
    padding-top: 5%;
}
.a7icon{
	background:white;
	color:orange
}
.footer{
	background:#22418A;
	margin-top:7%
}
.footer1{
	display:flex;
	justify-content:space-between;
	padding-top:6%
}
.footer-div1{
	width:28%;
}
.footer-div1 h1{
	color:white;
}
.footer-div1 span{
	color:orange;
	
}
.footer-div1 p{
	color:white;
	line-height:1.5
}
.footer-icon-div{
	display:flex;
	padding-top:6%
}
.footer-icon{
	height:32px;
	width:13%;
	background:#22418A;
	filter: brightness(0.8);
	margin-left:3%
}
.fbfooter{
	color:white;
	margin-left: 31%;
    margin-top: 22%;
}
.footer-icon:hover{
	background:orange
}
.footer1-div2{
	width:23%;
}
.footer1-div2 h1{
	color:white
}
.footer1-div2 ul li{
	list-style:none;
	color:white;
	line-height:1.8
}
.footer1-div2 ul{
	margin-left:-16%
}
.footer1-div3 h1{
	color:white;
	margin-left:15%
}
.footer1-div3{
	width:24%;
}
.footer-input1{
	background:white;
    height: 33px;
   
}
.footer-input2{
	background:orange;
	color:white;
	border-radius: 32px 35px;
    padding: 9px 23px 9px 23px;
	margin-left: 54%;
    margin-top: 7%;
}
.footer-input1 p{
	color:grey;
	font-size:19px;
	padding-top:2%;
	padding-left:8%
}

 .dropbtn {
  background-color:#2B3193;
  color: white;
  font-size: 21px;
  margin-left:4%;
  border:none;
 }


.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width:257px;
  margin-left:-48%
}
.dropdown-content p {
  color: #d966ff;
  padding: 12px 71px;
  text-decoration: none;
  display: block;
}

.dropdown p:hover {
	background-color: #ddd;
	}

.show {
	display: block;

}
	</style>
</head> 
</body> 
<?php
$menu=[
  'home' =>[
     'name1' =>'Adventure',
	 'name2' => 'Travelling',
	 'name3'=> 'Skiing',
	 'name4'=>'...',
  ],
  'about'=>[
     'name1'=>'about1',
	 'name2'=>'about2',
     'name3'=>'about3',
  ],
  'services'=>[
     'name1'=>'setvices1',
	 'name2'=>'services2',
     'name3'=>'services3',
]
]
?>
     <div class="header">
	 <div class="lineout">
	   <div class="menu container">
	   <div class="menu1">
	    <p>Exp<span>ox</span></p>
		
		<div class="ulli container">
		<ul>
	<?php      foreach($menu as $key=>$value)  { ?>
	        <li class="dropdown">
			<button onclick="myFunction(<?= $key ?>)" class="dropbtn"><?= $key ?></button>
			 <div id="<?php echo $key ?>" class="dropdown-content drop">
			 <?php foreach ($value as $val) { ?>
         <p><?= $val ?> </p>
			 <?php } ?>
  </div>
			</li>
	<?php } ?>
		
            		<script>
	  function myFunction(key) {
  key.classList.toggle("show");
   console.log(key)
	  }
	  </script>
      		
          
		</ul>
		</div>
		<i class="fas fa-search"></i>
	   </div>
	   <hr>
	   <div class="about">
	        <h1>About Us</h1>
			<p>Home/<span>About us</span></p>
	   </div>
	 </div>
	 </div>
	 </div>
	 
	 <?php
	 require './main.php';
	 require './footer.php';
	 ?>

