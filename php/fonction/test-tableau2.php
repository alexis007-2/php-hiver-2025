<?php
require_once(__DIR__.'/tableau.php');
$nb = readline('Entrez le nombre d element');
$tab = saisieTab($nb);
afficheForeach($tab);