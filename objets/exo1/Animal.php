<?php
require_once "Nourriture.php";

class Animal {
    private string $nom;
    private int $age;
    private string $espece;

    public function __construct(string $nom, int $age, string $espece) {
        $this->nom = $nom;
        $this->age = $age;
        $this->espece = $espece;
    }

    public function manger(Nourriture $nourriture){
        if($nourriture->getQuantite() === 0){
            echo "$this->nom va mourir, il n'a plus de: {$nourriture->getNom()}";
        }
        else{
            $nourriture->diminuerQuantite();
            echo "$this->nom est en train de manger de: {$nourriture->getNom()}, ";
            echo "il lui en reste désormais {$nourriture->getQuantite()}";
        }
        
    }

    public function dormir(){
        echo "$this->nom est en train de dormir.";
    }

    public function seDeplacer(){
        echo "$this->nom se déplace.";
    }
}



?>