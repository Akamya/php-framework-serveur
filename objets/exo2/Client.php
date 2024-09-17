<?php
require_once "CompteBancaire.php";

class Client {
    private string $nom;
    private string $prenom;
    private array $comptes = [];

    public function __construct(string $nom, string $prenom, array $comptes = []) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->comptes = $comptes;
    }

    public function ajouterCompte(CompteBancaire $compteBancaire){
        array_push($this->comptes, $compteBancaire);
    }

    public function getComptes(){
        return $this->comptes;
    }

}
?>