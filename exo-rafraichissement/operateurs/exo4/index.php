<?php
// Demande à l'utilisateur de saisir le premier nombre
echo "Saissisez un nombre entier: ";
$valeur = readline();
$reponse = $valeur % 2 == 0 ? "pair" : "impair";

echo "Le nombre est " . $reponse;
?>