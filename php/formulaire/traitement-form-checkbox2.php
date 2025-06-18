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

$res = champ_valide(['film']);
if($res===true){
    foreach($_POST['film'] as $f){
        echo $f;
        echo '<br>';
    }
}else{
    echo 'Aucun film sélectionné';
}