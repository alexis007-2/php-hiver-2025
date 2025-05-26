<?php
$couleur = ['rose','bleu','vert'];

/*
// avec une boucle for
for($i=0;$i<count($couleur);$i=$i+1){
    echo $couleur[$i];
    echo '<hr>';
}

*/

// avec une boucle foreach
foreach($couleur as $c){
    echo $c;
    echo '<hr>';
}

$couleur[] = 'magenta';

echo 'Nouveau tableau <br>';
foreach($couleur as $c)
{
    echo $c;
    echo '<br>';
}