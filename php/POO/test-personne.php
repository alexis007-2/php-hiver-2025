<?php
require_once(__DIR__.'/Personne.php');
$p = new Personne('legrand','Julie','111 rue consolat 13001 Marseille');
$p->seMarier('Dupond');
$p->demenager('12 place de la comedie 34000 Montpellier');
var_dump($p);