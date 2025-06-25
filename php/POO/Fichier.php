<?php
class Fichier
{
    public function __construct(private string $nom)
    {
        
    }

    public function ecrire(string $data):void{
        $nomFichier =$this->nom;
        file_put_contents($nomFichier,$data); 
    }

    public function lire():string{
        $nomFichier = $this->nom;
        return file_get_contents($nomFichier);
    }

    public function supprimer():bool{
        $nomFichier = $this->nom;
        return unlink($nomFichier);
    }
}