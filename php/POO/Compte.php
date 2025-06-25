<?php
class Compte
{
    public function __construct(private string $num,private string $nom,private float $solde)
    {        
    }

    public function retrait(float $montant):void
    {
        $this->solde = $this->solde-$montant;
    }

    public function depot(float $montant):void
    {
        $this->solde = $this->solde+$montant;
    }

    public function aDecouvert():bool
    {
        if($this->solde <0){
            return true;
        }else{
            return false;
        }
    }

    public function description():string
    {
        $s = 'mme/mr '.$this->nom.' a pour numero de compte '.$this->num. ' et a un solde de '.$this->solde. '€';
        return $s;
    }
}