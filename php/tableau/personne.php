<?php

$personne = [
    'nom'=>'Dupont',
    'prenom'=>'Claude',
    'age'=>31,
    'ville'=>'Paris'
];
//print_r($personne);
//var_dump($personne);

echo $personne['nom'];
echo '<br>';
echo $personne['ville'];
echo '<hr>';
foreach($personne as $p){
    echo $p;
    echo '<br>';
}
echo '<hr>';
// avec etiquette ou clé de tableau
foreach($personne as $k=>$p){
echo 'la clé '.$k.' a pour valeur '.$p;
echo '<br>';
}