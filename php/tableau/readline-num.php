<?php
$num = [];
for($i=0;$i<5;$i=$i+1){
    $x = readline('Entrez un nombre :');
    $num[] = $x;
}

foreach($num as $v){
    echo $v;
}