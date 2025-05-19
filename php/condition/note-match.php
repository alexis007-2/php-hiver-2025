<?php
$note = 'A';
$resultat = match($note){
    'A'=>'Très bien',
    'B'=>'Bien',
    'C'=>'moyen',
    'D'=>'mauvais',
    default=>'note inconnu'
};
echo $resultat;