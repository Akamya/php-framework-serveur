<?php
// try{
    echo "Voulez-vous ajouter une tâche ?: oui/non" . "\n";
    $ajoutTache = trim(fgets(STDIN));
    // $checkCaps = preg_match('/[A-Z]/', $texte);
    // echo $checkCaps;

    if($ajoutTache){
        if($ajoutTache === "oui"){
            echo "Ajoutez une tâche: ";
            $tache = trim(fgets(STDIN));
            if($tache){
                $date = date("d-m-y H:i");
                $file = fopen('./taches.txt', 'a');
                fwrite($file, $date . " : " . $tache . "\n" );
                fclose($file);
            }else{
                echo "erreur 2";
            }
        }
        if($ajoutTache === "non"){
            echo "Voulez-vous marquer une tâche comme 'terminé' ?: oui/non" . "\n";
            $statutTache = trim(fgets(STDIN));
            if($statutTache){
                if($statutTache === "oui"){
                    $file = fopen('./taches.txt', 'r+');
                    $contents = stream_get_contents($file);
                    $contentsTableau = explode("\n", $contents);
                    fclose($file);
                    echo "Quelle tâche à marquer comme 'terminé' ?" . "\n";
                    print_r($contentsTableau);
                    $statutTache = intval(fgets(STDIN));
                    foreach($contentsTableau as $key => $content){
                        // var_dump($key) . var_dump($statutTache);
                        if($key === $statutTache){
                            $file = fopen('taches.txt', 'r+');
                            fseek($file, $statutTache);
                            unset($statutTache);
                            fclose($file);
                        }
                        
                    }

                    // foreach($contentsTableau as $key => $content){
                    //     echo $contentsTableau;
                    // }
                    // if($statutTache === $date){
                    //     $file = fopen('./taches.txt', 'r+');
                    //     fseek($file, $date);
                    //     fwrite($file, "");
                    //     fclose($file);

                    // }

                }
            }

        }
    }else{
        echo "erreur 1";
    }
    
    
// }
// catch (Throwable $error) {
//     echo "Accès interdit";
// }

?>