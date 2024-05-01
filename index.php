<?php

require_once 'Frog.php';
require_once 'Ape.php';
require_once 'Animal.php';

$sheep = new Animal("Shaun");
$kodok = new kodok("buduk"); 
$sungokong = new sungokong("kera sakti"); 

echo "Name: " . $sheep->name . "<br>"; 
echo "legs: " . $sheep->legs . "<br>"; 
echo "cold blooded: " . ($sheep->cold_blooded) . "<br>";
echo "<br>";

echo "Name: " . $kodok->name . "<br>"; 
echo "legs: " . $kodok->legs . "<br>"; 
echo "cold blooded: " . ($kodok->cold_blooded) . "<br>"; 
echo "Jump: " . $kodok->jump() . "<br>"; 
echo "<br>";

echo "Name: " . $sungokong->name . "<br>"; 
echo "legs: " . $sungokong->legs . "<br>"; 
echo "cold blooded: " . ($sungokong->cold_blooded) . "<br>"; 
echo "Yell: " . $sungokong->yell() . "<br>"; 
echo "<br>";

?>