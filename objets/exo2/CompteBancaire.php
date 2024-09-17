<?php
class CompteBancaire {
    private string $numero;
    private float $solde;

    public function __construct(string $numero, float $solde) {
        $this->numero = $numero;
        $this->solde = $solde;
    }

    public function crediter(float $montant){
        $this->solde += $montant;
    }

    public function debiter(float $montant){
        $this->solde -= $montant;
    }

}



?>