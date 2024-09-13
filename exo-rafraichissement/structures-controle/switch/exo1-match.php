<?php
echo "Veuillez entrer un nombre de 1 à 7 : ";
$numeroJour = trim(fgets(STDIN));

$reponse = match ($numeroJour){
    "1" => "Lundi",
    "2" => "Mardi",
    "3" => "Mercredi",
    "4" => "Jeudi",
    "5" => "Vendredi",
    "6" => "Samedi",
    "7" => "Dimanche",
    default => "Il y a eu une erreur",
};

echo $reponse;

?>