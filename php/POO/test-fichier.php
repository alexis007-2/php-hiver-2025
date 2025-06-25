<?php
require_once(__DIR__.'/Fichier.php');
$f = new Fichier('fic.txt');
$f->ecrire('coucou salut');
echo $f->lire();
if($f->supprimer()===true){
    echo 'fichier effacé';
}
else{
    echo 'fichier inexistant';
}