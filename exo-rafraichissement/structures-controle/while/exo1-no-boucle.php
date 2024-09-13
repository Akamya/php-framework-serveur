<?php
echo "Veuillez entrer un nombre entier positif : ";
$nombre = intval(trim(fgets(STDIN)));

// Vérifiez si le nombre est positif ici
if($nombre > 0){
    // Utilisez la formule pour calculer la somme
    $somme = ($nombre * ($nombre + 1)) / 2;
    
    // Affichez la somme calculée
    echo $somme;
}else{
    echo "Erreur";
}
?>
