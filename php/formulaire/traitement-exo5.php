<?php
function champ_valide(array $champs): bool
{
    foreach ($champs as $c) {
        if ((isset($_POST[$c]) === false) || (empty($_POST[$c]) === true)) {
            return false;
        }
    }

    return true;
}

$res = champ_valide(['age']);
if($res===true){
    if ((filter_var($_POST['age'],FILTER_VALIDATE_INT))&&($_POST['age']>=18))
    {
        echo 'Vous êtes majeur';
        echo '<br>';
        echo $_POST['age'];
    }else{
        echo 'Age non valide ou vous êtes mineur';
    }
}else{
    echo 'champs age vide';
}