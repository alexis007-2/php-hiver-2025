<?php
class Livre
{
    public function __construct(private string $titre, private string $auteur, private int $annee, private bool $disponible=true)
    {   
    }

    public function afficherInfos():void
    {
        $res= 'Le livre '.$this->titre.' de '.$this->auteur.' à été publié en '.$this->annee;
        echo $res;
    }

    public function emprunter():void
    {
        if($this->disponible ==true){
            $this->disponible=false;
            echo 'Vous avez emprunter le livre '.$this->titre;
        } else {
            echo 'Le livre n\'est pas disponible';
        }
    }

    public function rendre():void
    {
        if($this->disponible==false){
            $this->disponible=true;
            echo 'Le livre à été rendu';
        }
    }
}