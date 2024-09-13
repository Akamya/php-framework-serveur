<?php
echo "Veuillez entrer votre âge : ";
$age = intval(fgets(STDIN));

$reponse = match (true){
    $age < 18 => "Mineur",
    $age <= 64 => "Adulte",
    $age >= 65 => "Senior",
    default => "Inconnu",
};

echo $reponse;
?>