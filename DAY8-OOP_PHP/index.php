<?php

require_once 'animal.php';
require_once 'Frog.php';
require_once 'Ape.php';

//Animal
$sheep = new Animal("Shaun");
echo "Name: " . $sheep->get_name() . "<br>";
echo "Legs: " . $sheep->get_legs() . "<br>";
echo "Cold blooded: " . $sheep->get_cold_blooded() . "<br><br>";

//Frog
$kodok = new Frog("Buduk");
echo "Name: " . $kodok->get_name() . "<br>";
echo "Legs: " . $kodok->get_legs() . "<br>";
echo "Cold blooded: " . $kodok->get_cold_blooded() . "<br>";
echo "Jump: ";
$kodok->jump();
echo "<br>";

//Ape
$sungokong = new Ape("Kera Sakti");
echo "Name: " . $sungokong->get_name() . "<br>";
echo "Legs: " . $sungokong->get_legs() . "<br>";
echo "Cold blooded: " . $sungokong->get_cold_blooded() . "<br>";
echo "Yell: ";
$sungokong->yell();
?>
