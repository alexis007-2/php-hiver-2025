<?php
$noms = ['Paul','Claude','Jean Marc','Eric'];
/* print_r($noms); pour le debogage */

echo $noms[0];// Accès à la première valeur
echo '<hr>';
echo $noms[1];// Accès à la 2ème valeur
echo '<hr>';
echo $noms[3];// Accès à la 4ème et dernière valeur

echo '<br>';
for($i=0;$i<count($noms);$i = $i+1){
echo $noms[$i];
echo '<hr>';
}