<?php
class Dad {
	private $userName;
	private $hair_color;
	public $height;
	protected $eyeColor;
	private $token;
	
	
// public function __construct($height,$hair_color){
	
	// $this->hair_color = $hair_color;
	// $this->height = $height;

	// }
	
	 function __construct(){
		 $this->token =rand(1,100);
	 }
	public function setHairColor($color){
	
	$this->hair_color = $color;
	}
function __destruct(){
	echo "the token is" . $this->token;
}
}

?> 