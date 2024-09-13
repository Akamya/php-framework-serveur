<?php
function scoreMot($mot){
    $lettres = str_split($mot);
    $score = 0;
    foreach($lettres as $key => $lettre){
        $scoreLettre = ord($lettre) - 96;
        $score = $score + $scoreLettre;
    }
    return $score;
}

$mot = "hello";
echo scoreMot($mot)
?>