<?php
/*Crée un tableau associatif $livre qui contient les informations suivantes d’un livre :
• Titre : "Le Petit Prince"
• Auteur : "Antoine de Saint-Exupéry"
• Année : 1943
Affiche chaque information du tableau avec une phrase, par exemple :
Le livre "Le Petit Prince" a été écrit par Antoine de Saint-Exupéry en 1943.*/

$livre ['Titre']='Le Petit Prince';
$livre ['Auteur']='Antoine de St Exupery';
$livre ['Annee']='1943';
echo $livre['Titre'].' a été écrit par '.$livre['Auteur'].' en '.$livre['Annee'].'.';

/*
$livre = [
'titre'=>'Le petit prince',
'auteur'=>'Antoine de st exupery',
'annee'=>1943

]*/