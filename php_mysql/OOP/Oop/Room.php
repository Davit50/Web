<?php
class Room
{
    private $walls_color;
    public $door_color;
    public $window_type;

    public function setWallColor($color) {
        $this->walls_color = $color;
    }
    public function getWallColor() {
        return $this->walls_color;
    }
//    static function getColor() {
////        $this->testNonStaticFunction();
//        self::testStaticFunction();
//    }
//    public function getCol() {
//        Room::$color;
//        $this->testNonStaticFunction();
//        $this->testStaticFunction();
//        self::testStaticFunction();
//    }
//
//    public static function testStaticFunction()
//    {
//        return 1;
//    }
//    public function testNonStaticFunction()
//    {
//        return 1;
//    }

}

$room = new Room();
var_dump($room);die;

//$room1 = new \Room();
$room->door_color = 'red';
//$room1->door_color = 'blue';
$room->setWallColor('red');
var_dump($room);die;
//////
///
///


//$room = new Room();
//$room->getColor();
//Room::getColor();
