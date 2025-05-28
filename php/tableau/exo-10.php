<?php
$fruit = ['pomme','banane','orange'];
$key_banane = array_search('banane',$fruit);
unset($fruit[$key_banane]);
print_r($fruit);