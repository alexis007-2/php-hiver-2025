<?php

function afficheFor(array $tab):void
{
    for($i=0;$i<count($tab);$i=$i+1){
        echo $tab[$i];
        echo '<br>';
    }
}

function afficheForeach(array $tab):void
{
    foreach($tab as $v){
        echo $v;
        echo '<br>';
    }
}

/**
 * Saisie un tableau en ligne de commande
 *
 * @param integer $nb : Le nombre d'element du tableau
 * @return array
 */
function saisieTab(int $nb):array
{
    $tab = [];
    for($i=0;$i<$nb;$i = $i+1){
        $val =readline('Entrez une valeur :');
        $tab[] = $val;
    }
    return $tab;
}