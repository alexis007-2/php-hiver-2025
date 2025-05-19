<?php
/*Écrire un script en condition ternaire qui demande un nombre et teste s’il est plus grand que 4*/
$num = readline('Tapez un nombre ');
$res = ($num < 4)? 'Ce nombre est plus petit que 4':'Ce nombre est plus grand que 4';
echo $res;