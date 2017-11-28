<?php

echo "bonjour";
?>

<!-- commentaire HTML-->

<?php
echo "comment vas-tu ? ";


// Ceci est un commentaire mono-ligne

/**
 * Ceci est un commentaire multi-lignes
 *  
 */

 ?><br /><?php
 echo "felix";
 ecHo "felix";

$age = 32;
echo $age;
// Erreur => sensible à la casse 
// echo $AGE;

$nom = "felix";
echo $nom;

define('NB_PROCESSUS', 4);

echo NB_PROCESSUS;

// Différents types:
$isOK = true; 
$i = 5;
$j = 2.3; // 2000 (FR) => 2,000 (US)
$n = "mon nom";
?><br /><br /><?php
echo "je m'appelle $nom et j'ai $age ans <br/>";

// Affichage 
echo "bonjour " . $nom;
?><br /><?php
print_r($nom);
?><br /><?php
var_dump($nom);

