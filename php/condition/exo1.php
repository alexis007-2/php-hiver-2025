<?php
/*1)  Demandez à l’utilisateur d’entrer son âge avec `readline()`.
2) Utilisez une condition `if` pour vérifier l'âge :
    • Moins de 12 ans→ Afficher : `"Accès interdit !"`.
    • Entre 12 et 17 ans → Afficher : `"Accès restreint avec accord parental."`.
    • 18 ans ou plus → Afficher : `"Accès autorisé !"`.
3) Demandez à l’utilisateur d’entrer un mot de passe avec `readline()`.
4) Vérifiez le mot de passe avec une condition `if`** :
    • Si le mot de passe est `"secret123"`, afficher : `"Accès autorisé !"`.
    • Sinon, afficher : `"Mot de passe incorrect. Accès refusé."`*/

$age = readline('Veuillez entrer votre âge!');
if($age < 12){
    echo 'Accès interdit!';
} elseif (($age >= 12)&&($age<=17)){
    echo 'Accès restreint avec accord parental!';
} else {
    echo 'Accès autorisé!';
}

$password = readline('Votre mot de passe?');
if($password === 'secret123'){
    echo 'Accès autorisé!';
} else {
   echo 'Mot de passe incorrect. Accès refusé.'; 
}