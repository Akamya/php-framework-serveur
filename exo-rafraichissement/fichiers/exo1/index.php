<?php
try{
    echo "Mon journal de bord: ";
    $texte = trim(fgets(STDIN));
    
    $date = date("d-m-y H:i") . ": ";
    
    $file = fopen('./journal.txt', 'a');
    fwrite($file, $date . $texte . "\n" );
    fclose($file);
}
catch (Throwable $error) {
    echo "Accès interdit";
}

// Pour la prochaine fois: Gestionnaire de tâches et Copie de fichiers binaires (exo 2 et 3)
?>