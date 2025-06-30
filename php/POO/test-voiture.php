<?php
require_once(__DIR__.'/Voiture.php');
$v = new Voiture('Peugeot','205',1982);
$v->afficheInfo();
$v->accelerer(50);
$v->ralentir(20);
$v->arreter();
var_dump($v);