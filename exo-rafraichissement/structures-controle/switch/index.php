<?php
echo "Veuillez entrer un nombre de 1 à 7 : ";
$numeroJour = fgets(STDIN);

switch ($numeroJour){
    case 1:
        echo "Lundi";
        break;
    case 2:
        echo "Mardi";
        break;
    case 3:
        echo "Mercredi";
        break;
    case 4:
        echo "Jeudi";
        break;
    case 5:
        echo "Vendredi";
        break;
    case 6:
        echo "Samedi";
        break;
    case 7:
        echo "Dimanche";
        break;
    default:
        echo "Il y a eu une erreur";
}

?>