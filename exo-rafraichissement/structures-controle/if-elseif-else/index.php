<?php
echo "Veuillez entrer une note : ";
$note = fgets(STDIN);

if($note <=20){
    if($note <= 10){
        echo "Malheureusement, vous avez échoué.";
    }
    elseif($note <= 12){
        echo "Vous avez juste réussi!";
    }
    elseif($note <= 14){
        echo "C'est un assez bien!";
    }
    elseif($note <= 16){
        echo "C'est un bien!";
    }
    elseif($note <= 20){
        echo "C'est un très bien!";
    }
}else{
    echo "Il y a eu une erreur";
}
?>