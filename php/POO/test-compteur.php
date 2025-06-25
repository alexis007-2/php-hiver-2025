<?php
require_once(__DIR__.'/Compteur.php');
$c = new Compteur();
$c->clic();
$c->clic();
$res = $c->getVal();
echo $res;
echo '<br>';
$c->raz();
$res2 = $c->getVal();
echo $res2;