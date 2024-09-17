<?php
require_once "Client.php";
require_once "CompteBancaire.php";

$compte1 = new CompteBancaire("1er", 1000);
$compte2 = new CompteBancaire("2eme", 2000);
$client1 = new Client("langlet", "elodie", [$compte1, $compte2]);
$test = $client1->getComptes();

$compte1->crediter(40);
print_r($test);
?>