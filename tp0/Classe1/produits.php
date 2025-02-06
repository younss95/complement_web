<?php


namespace Classe1;
class produits
{
    public $nom;
    public $origine;

    public $prixHT;

    public $TVA_UE = 1.15;
    public $TVA_NONUE = 1.18;

    public function __construct($nom, $origine, $prixHT)
    {
        $this->nom = $nom;
        $this->origine = $origine;
        $this->prixHT = $prixHT;
    }


    public function calculTVAUE()
    {
        // Calcule la TVA puis la multiplie par 100
        return ($this->prixHT * $this->TVA_UE) * 100;
    }

    public function calculTVNONUE()
    {
        // Calcule la TVA puis la multiplie par 100
        return ($this->prixHT * $this->TVA_NONUE) * 100;
    }
}