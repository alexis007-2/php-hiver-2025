<?php
$res=0;
for ($i=1; $i<=100; $i=$i+1){
    $res=$res+$i;
    echo $res;
    echo '<br>';

}
echo 'La somme est '.$res;