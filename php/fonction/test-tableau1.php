<?php
require_once(__DIR__.'/tableau.php');
$t = [4,8,10,3];
echo 'affiche avec for<br>';
echo afficheFor($t);
echo '<br>';
echo 'affiche avec foreach<br>';
echo afficheForeach($t);