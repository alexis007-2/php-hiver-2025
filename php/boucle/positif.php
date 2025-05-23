<?php
$nb = readline('Entrez un nombre : ');
while($nb >0){
    $nb = readline('Entrez un autre nombre : ');
}
echo 'Vous avez rentrez un nombre négatif ou nul';