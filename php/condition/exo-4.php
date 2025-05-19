<?php
/*Écrire un script en condition  qui demande la pointure et qui teste si lapointure est inférieur à 45 ça affiche « on est dans la moyenne » et si la pointure est supérieure à 45 ça affiche pied trop grand */
$pointure = readline('Entrez votre pointure ');
$res = ($pointure>45)?'pied trop grand':'on est dans la moyenne';
echo $res;
