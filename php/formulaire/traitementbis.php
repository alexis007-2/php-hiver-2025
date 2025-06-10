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

$res = champ_valide(['nom', 'prenom']);
if ($res === true) {
    echo $_POST['nom'];
    echo '<hr>';
    echo $_POST['prenom'];
} else {
    echo 'Tous les champs ne sont pas remplis';
}
