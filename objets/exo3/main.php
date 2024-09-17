<?php
require_once "Nourriture.php";

$carotte = new Nourriture("légume", 2, 5, "carotte");
$carotte->acheter(3);
$total = $carotte->getTotalPrix();
echo $total;
?>