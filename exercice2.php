<?php
// Tableau d'entiers
$tabEntier = array(10 , 11 , 12);

//echo $tabEntier;
print_r($tabEntier);
echo "<br/>";
var_dump($tabEntier);

// Tableau mixte : entier/string
$tabMixte = array(10 , "felix" , 12);

echo "<br/>";echo "<br/>";

//echo $tabEntier;
print_r($tabMixte);
echo "<br/>";
var_dump($tabMixte);

echo "<br/><br/>";
// Afficher la Xième valeur : 
echo "2ème valeur = " . $tabMixte[1];
echo "<br/>";

// Compter nb elements
echo "Taille du tableau = " . count($tabMixte);
