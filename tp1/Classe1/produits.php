<?php


class produits
{
    public $nom;
    public $origine;

    public $prixHT;

    public function __construct($nom, $origine, $prixHT){
        $this->nom = $nom;
        $this->origine = $origine;
        $this->prixHT = $prixHT;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrixHT()
    {
        return $this->prixHT;
    }

    /**
     * @param mixed $prixHT
     */
    public function setPrixHT($prixHT)
    {
        $this->prixHT = $prixHT;
    }

    /**
     * @return mixed
     */
    public function getOrigine()
    {
        return $this->origine;
    }

    /**
     * @param mixed $origine
     */
    public function setOrigine($origine)
    {
        $this->origine = $origine;
    }



}