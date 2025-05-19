<?php
$menu = readline('choisissez votre menu');
$res = match($menu){
'A'=> 'bigmac',
'B'=> 'Royal Cheese',
'C'=> 'Mac Chicken',
default => 'je ne comprends pas votre commande'
 };
 echo $res;

/* avec switch
switch($menu){
    case 1:
        echo 'Big Mac';
        break;
    case 2:
        echo 'Royal Cheese';
        break;
    case 3:
        echo 'Mc Chicken';
        break;
    default:
        echo 'on ne connait pas le menu';
        break;            
}
        */