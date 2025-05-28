<?php
$tab = ['Pomme' => 1.2, 'Banane' => 0.8, 'Cerise' => 2.5];

foreach($tab as $n => $m){
    echo 'Le prix de '.$n.' est de '.$m.' €';
    echo '<br>';
}