<?php
class Dad {

    protected $hair_color;
    public $height;
    protected $eyeColor ='blue';
    protected $token;

    public function __construct($height,$hair_color,$token)
    {
        $this->hair_color = $hair_color;
        $this->height = $height;
        $this->token = $token;
    }
    public function getAllFieldsTogether($data) {
        return $this->height . '-' . $this->eyeColor .'-' . $this->token .'-'. $this->hair_color;
    }
    public function setHairColor($color) {
        $this->hair_color = $color;
    }
    protected function setHairColorProtected($color) {
        $this->hair_color = $color;
    }
    private function setHairColorPrivate($color) {
        $this->hair_color = $color;
    }
//    function __destruct()
//    {
////      echo "the Token Is" . $this->token;
//    }
}
