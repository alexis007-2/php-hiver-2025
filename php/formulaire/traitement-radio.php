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

$res = champ_valide(['civilite','nat']);
if($res===true){
    echo 'Civilité :'.$_POST['civilite'];
    echo '<br>';
    echo 'Nationalité : '.$_POST['nat'];
}else{
    echo 'Tous les champs ne sont pas rempli';
}