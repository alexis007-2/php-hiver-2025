<?php
/*Exercice 8: Fusionner deux tableaux
1. Créez deux tableaux
$nom = [‘alice’,’bob’]
$age = [19,22]
2. Fusionnez dans un tableau */

$nom = ['alice','bob'];
$age = [19,22];
$tab = array_combine($nom,$age);
foreach($tab as $k=>$v){
    echo 'la clé '.$k. ' a pour valeur '.$v;
    echo '<br>';
}
