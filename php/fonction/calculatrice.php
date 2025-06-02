<?php

/**
 * Additionne deux nombres
 *
 * @param integer $a
 * @param integer $b
 * @return integer
 */
function add(int $a,int $b):int
{
    return $a+$b;
}

/**
 * Soustrait deux nombres entiers
 *
 * @param integer $a
 * @param integer $b
 * @return integer
 */
function sous(int $a,int $b):int
{
    return $a-$b;
}

/**
 * Multiplie deux nombre
 *
 * @param integer $a
 * @param integer $b
 * @return integer
 */
function multi(int $a,int $b):int
{
    return $a*$b;
}

/**
 * Calcule la carré d'un nombre
 *
 * @param integer $a
 * @return integer
 */
function carre(int $a):int
{
    return $a*$a;
}

/**
 * Verifie si un nombre est impair
 *
 * @param integer $a
 * @return boolean
 */
function impair(int $a):bool
{
    if(($a%2)==1){
        return true;
    }else{
        return false;
    }
}

function cube(int $a):int
{
    return $a*$a*$a;
}