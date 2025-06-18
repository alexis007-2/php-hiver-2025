<?php
function champ_valide(array $champs):bool
{
    foreach ($champs as $c) {
        if ((isset($_POST[$c]) === false) || (empty($_POST[$c]) === true)) {
            return false;
        }
    }

    return true;
}
$res= champ_valide(['language']);
if($res === true){
    foreach($_POST['language']as $lang){
        echo 'Language préféré '.$lang;
        echo'<br>';
    }
}else {
    echo 'Aucune case cochée';
}