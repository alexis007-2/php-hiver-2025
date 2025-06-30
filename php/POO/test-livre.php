<?php
require_once(__DIR__.'/Livre.php');
$l1=new Livre('Vol de nuit','Antoine Saint-Exupéry',1931);
$l2= new Livre('Le Misanthrope', 'Molière',1666);
$l1->emprunter();
echo '<br>';
$l1->afficherInfos();
echo '<br>';
$l2->afficherInfos();
echo '<br>';
$l1->rendre();