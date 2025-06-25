<?php
class Compte_bis
{
    private string $num;
    private string $nom;
    private float $solde;

    public function __construct(private string $n,private string $no,private float $s)
    {  
        $this->num = $n;
        $this->nom = $no;
        $this->solde = $s;      
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