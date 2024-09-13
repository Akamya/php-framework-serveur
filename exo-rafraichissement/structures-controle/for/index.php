<?php
echo "Veuillez entrer un nombre entier positif : ";
$nombre = intval(fgets(STDIN));

// Vérifiez si le nombre est positif ici
if($nombre > 0){

// Initialisez la variable pour stocker le résultat de la factorielle
$resultat = 1;

// Utilisez une boucle for pour calculer la factorielle
for($n=1; $n<=$nombre; $n++){
    $resultat = $resultat * $n;
}
}else{
    echo "Erreur";
}

// Affichez le résultat de la factorielle
echo $resultat;

?>