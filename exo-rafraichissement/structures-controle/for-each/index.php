<?php
$nombres = [15, 7, 22, 13, 9];

// Initialisez la variable pour stocker le plus grand élément
$max = $nombres[0];

// Utilisez la boucle foreach pour rechercher le plus grand élément
foreach ($nombres as $nombre){
    if($max < $nombre){
        $max = $nombre;
    }
   
}

// Affichez le plus grand élément
echo $max;



?>