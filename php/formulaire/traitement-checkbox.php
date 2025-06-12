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

$res = champ_valide(['foot','food']);
if($res ===true){
    foreach($_POST['foot'] as $foot){
        echo 'Equipé préféré :'.$foot;
        echo '<br>';
    }
    echo '<hr>';
    foreach($_POST['food'] as $food){
        echo 'Fast Food préféré :'.$food;
        echo '<br>';
    }
}
else{
    echo 'Tous les champs ont pas été rempli';
}