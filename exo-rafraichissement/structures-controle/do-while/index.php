<?php
function MDPvalide($arg){
    if(strlen($arg) < 8){
        return false;
    }
    // Expression regexp; merci stackoverflow
    // Regarde si le string ne contient pas une maj
    if(!preg_match('/[A-Z]/', $arg)){
        return false;
       }
    if(!preg_match('/[a-z]/', $arg)){
        return false;
    }
    if(!preg_match('/[0-9]/', $arg)) {
        return false;
    }
    return true;
}

do {
    echo "Veuillez entrer un mot de passe: ";
    $mdp = fgets(STDIN);
}
while(!MDPvalide($mdp));
echo "MDP enregistré";



?>