<?php
echo "Veuillez entrer un nombre entier positif : ";
$nombre = intval(trim(fgets(STDIN)));

// Vérifiez si le nombre est positif ici
if($nombre > 0){

// Initialisez la somme et le compteur
$somme = 0;
$compteur = 0;

// Utilisez une boucle while pour calculer la somme
while($compteur < $nombre){
$compteur++;
$somme = $somme + $compteur;
}

// Affichez la somme calculée
echo $somme;
}else{
    echo "Erreur";
}

?>