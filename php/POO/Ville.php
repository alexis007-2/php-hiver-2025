<?php
class Ville
{
    public function __construct(private string $nom, private string $dept)
    {

    }
    public function afficherInfos():void
    {
        echo 'La ville de '.$this->nom.' est située dans le '.$this->dept;
    }
}