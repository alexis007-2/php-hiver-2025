<?php
require_once(__DIR__.'/calculatrice.php');

$res_add = add(2,6);
echo $res_add;
echo '<hr>';
$res_imp = impair(5);
if($res_imp==true){
    echo 'Impaire';
}else{
    echo 'Pair';
}
echo '<hr>';
$res_cube = cube(4);
echo $res_cube;