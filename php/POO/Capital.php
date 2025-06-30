<?php
class Capital extends Ville
{
    public function monument(string $nom):void
    {
        echo $nom;
    }
}