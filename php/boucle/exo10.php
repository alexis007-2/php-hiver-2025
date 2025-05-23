<?php
// Nombre aléatoire de 1 à 10
$nba = random_int(1, 10);
// Nombre que l' utilisateur doit tapez
$nb = readline('Entrez un nombre');

while($nba!=$nb){
    $nb = readline('Entrez encore un nombre');
}

echo 'Vous avez gagné';
