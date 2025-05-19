<?php
$note = 11;
$resultat = match(true){
    ($note >=10)=>'admis',
    (($note >=8)&&($note<10))=>'ratrappage',
    ($note <8)=>'refusé',
    default => 'note inconnu'

};
echo $resultat;