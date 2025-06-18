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

$res = champ_valide(['ville','description']);
if($res===true){
    echo $_POST['description'];
    echo '<br>';
    echo $_POST['ville'];
}else{
    echo 'Tous les champs ne sont pas rempli';
}