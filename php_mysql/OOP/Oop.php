 <?php
 
 class Room{
	 public $color_non_static = 'red';
	 public $color_nonasd_static = 'red';
	 public $color_nonasdf_static = 'red';
 static $color = 'red';
 
 
 static function getColor(){
	 return Room::$color;
 }
 
 }
//
//
$room = new Room();
$room->getColor();
Room::getColor();
 
 ?>