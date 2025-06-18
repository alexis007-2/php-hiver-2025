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
$res = champ_valide(['email','pass']);
if ($res===true){
    if ((strlen($_POST["pass"]>6))&&(filter_var($_POST["email"],FILTER_VALIDATE_EMAIL))){
        if ($_POST['pass']==="azertyu"){
            echo "Votre mail est :  ".$_POST["mail"];
            echo "Connexion autorisée";
        }else{
            echo "Connexion refusée";

        }
    }


}