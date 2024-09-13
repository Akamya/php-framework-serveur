<?php
// Demande à l'utilisateur de saisir le premier nombre
echo "Entrez la longueur : ";
$longueur = intval(readline());



echo "Entrez la largeur : ";
$largeur = intval(readline());


$perimetre = ($longueur + $largeur) *2;
echo "Perimetre : $perimetre \n" ; 

$aire = $longueur * $largeur;
echo "Aire : $aire";

?>