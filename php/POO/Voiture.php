<?php
class Voiture
{
    public function __construct(private string $marque,private string $modele,private int $annee,private float $vitesse=0)
    {
        
    }

    public function afficheInfo():void
    {
        $res = 'La voiture de marque '.$this->marque.' et de modele '.$this->modele. ' a été conçu en '.$this->annee.' ';
        echo $res; 
    }

    public function accelerer(float $vitesseAjoutee):void
    {
        $this->vitesse = $this->vitesse+$vitesseAjoutee;
    }

    public function ralentir(float $vitesseEnMoins):void
    {
        $this->vitesse = $this->vitesse-$vitesseEnMoins;
        if($this->vitesse <0){
            $this->vitesse = 0;
        }
        /*
        $this->vitesse =($this->vitesse < 0)? 0:$this->vitesse
        */
    }

    public function arreter():void
    {
        $this->vitesse = 0;
    }
}