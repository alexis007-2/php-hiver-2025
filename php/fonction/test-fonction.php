<?php
require_once( __DIR__.'/fonction.php');
$res = perimetre(12,3);
echo $res.'<br>';

$res1 = triple(4);
echo $res1.'<br>';

$res2 = perimetreCercle(5);
echo $res2;
echo'<br>';

$res3 = somme(10,20);
echo $res3;
echo '<hr>';

$res4 = estPair(10);
if($res4){
    echo 'pair';
}else{
    echo 'impair';
}
echo '<hr>';
$tab = [10, 25, 8, 36, 12];
 $res = maxTableau ($tab);
 echo $res;

echo '<hr>';
$phrase = 'Bonjour, tout le monde';
$mot =  'monde';
$res5 = contientMot($phrase, $mot);
echo $res5;


echo '<hr>';
echo inverse('hello');
echo '<hr>';

$res =convertirTemperature(100,'F');
echo $res;

echo'<hr>';
$prix=12;
echo ttc($prix);

echo '<hr>';
saluer('Marcelo','es');

echo '<hr>';
$res = saluer2('pablo','es');
echo $res;