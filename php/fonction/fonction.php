<?php
function perimetre(float $longueur, float $largeur): float
{

    return ($longueur + $largeur) * 2;
}

function triple(int $a): int
{
    return 3 * $a;
}

function perimetreCercle(float $rayon): float
{
    $PI = 3.14;
    return 2 * $PI * $rayon;
}

function somme(int $a, int $b): int
{
    return $a + $b;
}

function estPair(int $a): bool
{
    if ($a % 2 == 0) {
        return true;
    } else {
        return false;
    }
    //ou plus rapide
    // return ($a%2==0)?true:false;
}

function maxTableau(array $tab): int
{
    return max($tab);
}

function contientMot(string $phrase, string $mot): string
{
    if (strpos($phrase, $mot) !== false) {
        return 'Le mot est dans la phrase';
    } else {
        return 'Le mot n\'est pas dans la phrase';
    }
}
/**
 * inverser un mot
 *
 * @param string $mot
 * @return string
 */
function inverse(string $mot): string
{
    return strrev($mot);
}

/**
 * Conversion en degrès ou en fahrenheit
 *
 * @param integer $temp
 * @param string $unite
 * @return float
 */
function convertirTemperature(int $temp, string $unite): float|string
{
    if ($unite === 'C') {
        return ($temp * 9 / 5) + 32;
    } elseif ($unite === 'F') {
        return ($temp - 32) * 5 / 9;
    } else {
        return 'Erreur';
    }
}

function ttc(float $prix): float
{
    return $prixttc = ($prix + ($prix * 20) / 100);
}

function saluer(string $nom, string $lang = 'fr'): void
{
    // avec switch

    switch ($lang) {
        case 'fr':
            echo 'bonjour ' . $nom;
            break;
        case 'en':
            echo 'hello ' . $nom;
            break;
        case 'es':
            echo 'Holla ' . $nom;
            break;
        default:
            echo 'langue inconnu';
            break;
    }
}

function saluer2(string $nom, string $lang = 'fr'): string
{
    // avec match

    $resultat = match($lang){
        'fr'=>'salut '.$nom,
        'en'=>'hello '.$nom,
        'es'=> 'holla qué tal '.$nom,
        default =>'Langue inconnu'
    };
    return $resultat;
}

