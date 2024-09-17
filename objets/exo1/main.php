<?php
require_once "Animal.php";
require_once "Nourriture.php";

$bambi = new Animal("Bambi", 1, "cerf");
$nourriture = new Nourriture("herbe", 1);
$bambi->manger($nourriture);
?>