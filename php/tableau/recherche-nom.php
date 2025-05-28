<?php
$nom = ['pierre','luc','julie'];

$n = 'claude';

// Première méthode avec array search
if(array_search($n,$nom)!==false){
    echo 'Le nom est dans le tableau';
}else{
    echo 'le nom est pas dans le tableau';
}
echo '<hr>';

// Deuxième méthode avec in array
if(in_array($n,$nom)==true){
   echo 'Le nom est dans le tableau';
}else{
    echo 'le nom est pas dans le tableau';
}
