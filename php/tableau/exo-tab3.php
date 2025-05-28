<?php

$notes = [
    'maths'=>15,
    'francais'=>13,
    'histoire'=>12
];

foreach($notes as $k=>$v)
{
    echo ' La note en '.$k.' est '.$v.'/20';
    echo '<br>';
}

$notes['anglais'] = 14;
$notes['francais'] =16;
unset($notes['histoire']);

var_dump($notes);
