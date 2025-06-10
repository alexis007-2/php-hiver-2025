<?php
// On va verifier si le champ existe et n' est pas vide

if((isset($_POST['nom'],$_POST['prenom'])===true) && (empty($_POST['nom'])===false)&&(empty($_POST['prenom'])===false)){
echo $_POST['nom'];
echo '<br>';
echo $_POST['prenom'];
}else{
    echo 'Tous les champs ne sont pas remplis';
}