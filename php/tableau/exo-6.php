<?php
$tab = [];
// Remplissage du tableau
for($i=0;$i<3;$i=$i+1){
    $x = readline('Entrez un prénom ? ');
    // Ajout dans le tableau tab
    $tab[]=$x;
}

//affichage du tableau
foreach($tab as $t){
    echo $t;
}

// Demande d'entrez un prenom
$nom = readline('Entrez un prenom ?');
if(array_search($nom,$tab)!==false){
    echo 'Le prénom est dans le tableau';
}else{
    echo 'Le prénom n est pas dans le tableau';
}