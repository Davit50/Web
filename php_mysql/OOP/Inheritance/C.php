<?php


include 'B.php';
class C extends B{
	public $firstC;
	public $secondC;
	public $thirdC = 'thirdC';
	
	
	function __construct()
	{
		
	echo $this->third . $this->firstB .$this->secondB;
	//parent::__construct();
		//$this->firstA='helloA';
		//$this->secondB='secondB';
		//$this->thirdC='helloC';
	//echo($this->firstA . $this->secondB . $this->thirdC);	
	}
}

?>