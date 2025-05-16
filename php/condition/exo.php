<?php
//exercice 1

$age = readline('Quelle est votre age ?');
if($age >=18){
    echo 'Tu es majeur';
}else{
    echo 'Tu es mineur';
}

// exercice 2
$num = readline('Entrez un nombre ?');
$res = $num % 2;
if($res === 0){
    echo 'nombre pair';
}else{
    echo 'nombre impair';
}