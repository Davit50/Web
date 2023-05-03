<?php
abstract class ParentAbstract
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract public function getName();

    abstract public function bazmatkum($number): int;





}






