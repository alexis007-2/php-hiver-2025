<?php
require_once(__DIR__.'/Compte.php');
$c1 = new Compte('1234','toto',3000);
$c1->retrait(40);
if($c1->aDecouvert()){
    echo 'envoie mail et SMS';
}else{
    echo 'OK';
}
$desc = $c1->description();
echo $desc;