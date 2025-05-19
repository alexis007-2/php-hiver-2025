<?php
$note = 5;
if($note >=10){
    echo 'Admis';
}elseif(($note >=8)&&($note <10)){
    echo 'Rattrapage';
}else{
    echo 'Refusé';
}