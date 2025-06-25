<?php
class Personne
{
    public function __construct(private string $nom,private string $prenom,private string $adresse)
    {        
    }

    public function getNom():string
    {
        return $this->nom;
    }

    public function getAdresse():string
    {
        return $this->adresse;
    }

    public function setNom(string $n):void
    {
        $this->nom = $n;
    }

    public function setAdresse(string $a):void
    {
        $this->adresse = $a;
    }

    public function seMarier(string $nouveauNom):void
    {
        $this->setNom($nouveauNom);
    }

    public function demenager(string $nouvelleAdresse):void
    {
        $this->setAdresse($nouvelleAdresse);
    }
}