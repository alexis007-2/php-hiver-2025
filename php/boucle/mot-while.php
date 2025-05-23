<?php
$mot = readline('Entrez le mot ?');
while($mot != 'azerty'){
    echo 'Mot incorrect';
    $mot = readline('Entrez le bon mot ?');
}

echo 'Gagné';