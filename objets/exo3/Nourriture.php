<?php
class Nourriture {
    private string $type;
    private int $prix;
    private int $nutriscore;
    private int $quantite;
    private string $nom;

    public function __construct(string $type, int $prix, int $nutriscore, string $nom, int $quantite = 0) {
        $this->nom = $nom;
        $this->quantite = $quantite;
        $this->prix = $prix;
        $this->nutriscore = $nutriscore;
        $this->type = $type;
    }

    public function getNom(){
        return $this->nom;
    }
    public function getType(){
        return $this->type;
    }
    public function getPrix(){
        return $this->prix;
    }
    public function getNutriscore(){
        return $this->nutriscore;
    }

    public function getQuantite(){
        return $this->quantite;
    }

    public function getTotalPrix(){
        $total = $this->prix * $this->quantite;
        return $total;
    }

    public function acheter(int $amount){
        $this->quantite += $amount;
    }

}

?>