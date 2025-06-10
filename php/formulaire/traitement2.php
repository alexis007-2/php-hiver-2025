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
$res = champ_valide(['nom','prenom','mail']);
if($res===true){
    if(filter_var($_POST['mail'],FILTER_VALIDATE_EMAIL)){
        echo $_POST['nom'];
        echo '<hr>';
        echo $_POST['prenom'];
        echo '<hr>';
        echo $_POST['mail'];
    }else{
        echo 'Mail invalide';
    }
}else{
    echo 'Tous les champs ne sont pas rempli';
}