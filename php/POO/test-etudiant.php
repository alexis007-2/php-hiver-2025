<?php
require_once(__DIR__.'/Etudiant.php');
$e1 = new Etudiant('Paul',[12,15,9,10,10,13,7,9.5,13,12]);
$m = $e1->moyenne();
echo 'la moyenne est '.$m;
echo '<br>';
if($e1->recu()===true){
    echo 'admis';
}else{
    echo 'ajourné';
}