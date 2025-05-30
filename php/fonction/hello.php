<?php

/**
 * Affiche Hello à l'ecran
 *
 * @return void
 */
function hello():void
{
    echo 'Hello';
}

/**
 * Affiche hello avec un paramètre
 *
 * @param string $nom
 * @return void
 */
function hello2(string $nom):void
{
    echo 'hello '.$nom;
}

hello();
echo '<br>';
hello2('claude');

