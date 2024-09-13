<?php
// Demande à l'utilisateur de saisir le premier nombre
echo "La 1ère valeur = ";
$valeur1 = readline();

echo "La 2ème valeur = ";
$valeur2 = readline();

$premiereValeur = $valeur1;

$valeur1 = $valeur2;

$valeur2 = $premiereValeur;

echo "Ceci est la valeur 1 = $valeur1 et ceci est la valeur 2 = $valeur2";

?>