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
$res = (champ_valide(['paiement']))?'Vous payez en '.$_POST['paiement']:'Vous avez pas selectioné de mode de paiement';
echo $res;
