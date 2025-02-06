<?php
class Utilisateur{

    public $login;
    public $mdp;
    public $timestamp;



    public function __construct($login, $mdp){
        $this->login = $login;
        $this->mdp = md5($mdp);
        $this->timestamp = time();
    }

    public function __sleep(){
        echo "tlemcen";
        return(array('login', 'mdp', 'timestamp'));
    }

    public function __wakeup(){
        echo "nourhene reveille toi !!!!!!";
    }

    public function __destruct(){
        echo"<p> Suppression de $this->login</p>";
    }

    public function miseEnFormeTimestamp()
    {
        setlocale(LC_ALL, 'fr_FR.UTF-8');
        $format = date('d/m/Y à H:i:s');
        return strftime($format, $this->timestamp);

    }

    public function information(){
        $dateCreation = $this->miseEnFormeTimestamp();
        return("$this->login, $this->mdp, $dateCreation");
    }


    public function getLogin()
    {
        return $this->login;
    }


    public function getTimestamp()
    {
        return $this->timestamp;
    }


    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
    }


    public function getMdp()
    {
        return $this->mdp;
    }


    public function setMdp($mdp)
    {
        $this->mdp = $mdp;
    }



    public function setLogin($login)
    {
        $this->login = $login;
    }





}