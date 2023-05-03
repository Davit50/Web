<?php

include 'first.php';
class second extends first{
	
	private $email ;
	
	function __construct($parentName)
	{
		$this->email = ' e_mail';		
		$this->name = $parentName;
		$this->surname = ' AZGANUN';
		
	}
function getAllFields(){
 echo($this->email .' ' . $this->name . ' ' . $this->surname  );
}
}



 $second = new second('parent Name');
 $second->getAllFields(); 
 ?>