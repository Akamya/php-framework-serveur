<?php
// Demande à l'utilisateur de saisir le premier nombre
echo "Entrez le premier nombre : ";
$premierNombre = intval(readline());

echo "Entrez le deuxième nombre : ";
$deuxiemeNombre = intval(readline());


$somme = $premierNombre + $deuxiemeNombre;

echo $somme;
?>