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

$res = champ_valide(['nom', 'email', 'message']);
if ($res === true) {
    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        echo $_POST['nom'];
        echo '<br>';
        echo $_POST['email'];
        echo '<br>';
        echo $_POST['message'];
        echo '<br>';
    } else {
        echo 'Mail non valide';
    }
} else {
    echo 'Tout les champ ne sont pas remplis.';
}
