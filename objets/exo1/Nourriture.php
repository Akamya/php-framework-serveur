<?php
class Nourriture {
    private string $nom;
    private int $quantite;

    public function __construct(string $nom, int $quantite) {
        $this->nom = $nom;
        $this->quantite = $quantite;
    }

    public function diminuerQuantite(){
        if($this->quantite === 0){
            echo "Il n'y a plus de nourriture.";
        }else{
            $this->quantite--;
            return $this->quantite;
        }
    }

    public function getNom(){
        return $this->nom;
    }

    public function getQuantite(){
        return $this->quantite;
    }

}

?>