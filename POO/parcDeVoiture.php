<?php 
class Voiture {
    private $immatriculation;
    private $dateCirculation;
    public $km;
    private $modele;
    private $marque;
    public $couleur;
    public $poids;
    public $utilitaire;
    public $pays;
    function __construct($immatriculation,$dateCirculation,$km,$modele,$marque,$couleur,$poids){
        $this->immatriculation = $immatriculation;
        $this->dateCirculation =$dateCirculation;
        $this->km = $km;
        $this->modele = $modele;
        $this->marque = $marque;
        $this->couleur = $couleur;
        $this->poids = $poids;
        if ($marque =="Audi"){
            $this->reserved= "reserved";
        }
        if ($marque!="Audi"){
            $this->free ="free";
        }
        if ($poids>3.5){
            $this->utilitaire = "oui";
        }
        else if ($poids<3.5){
            $this->utilitaire ="non";
        }
        if(preg_match("/BE/", $immatriculation)){
            $this->pays = "Belgique";
        }
        if(preg_match("/FR/", $immatriculation)){
            $this->pays = "France";
        }
        if(preg_match("/DE/", $immatriculation)){
            $this->pays = "Allemagne";
        }
        if($km<100000){
            $this->usure = "low";
        }
        if($km>100000 AND $km<200000){
            $this->usure="middle";
        }
        if($this->km>200000){
            $this->usure="hight";
        }
    }
    
}

$p = new Voiture("DE05122",1994,114256,"gt5","golf","rouge",4.5);
$p->km = 450000;
print_r($p);
?>