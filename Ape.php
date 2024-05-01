<?php
require_once 'Animal.php';

class sungokong extends Animal
{
    public $legs = 2;
    public function yell()
    {
        return "Auooo";
    }
}
?>