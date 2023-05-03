<?php
include "Dad.php";
class Child extends Dad {

    public $weight;
//    public function __construct($child_hair_color)
//{
//    echo $this->hair_color . ' before Parent<br>';
//    parent::__construct('180','red');
//    echo $this->hair_color . ' after Parent<br>';
//
//    $this->hair_color = 'blue';
////    echo $this->hair_color . ' after Child construct<br>';
//
////    echo $this->height;
//}

    public function getAllFieldsTogether($data) {
        return $this->height .'-'. $this->hair_color. '-'. $this->weight .'-'. $this->token .'-'. $this->eyeColor;
    }

    public function __construct($weight)
    {
        parent::__construct('180', 'asd','asd');
        $this->weight = $weight;
//        echo $this->getAllFieldsTogether('childData');
    }

    public function getAllData () {
        $this->setHairColorProtected('someColor');
        echo $this->eyeColor;
        return $this->eyeColor = 'red';
    }
}

