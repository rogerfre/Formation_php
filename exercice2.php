<?php
$tabEntier = array(10 , 11 , 12);

//echo $tabEntier; ne fonctionne pas car pas string
print_r($tabEntier);
echo "<br/>";
var_dump($tabEntier);


//tableau mixte : entier/string
$tabMixte = array(10 , "felix" ,12);
echo "<br/>";
var_dump($tabMixte);
echo "<br/>";
// affichage de la seconde valeur du tableau
echo "2eme valeur = " . $tabMixte[1];
echo "<br/>";
// taille d'un table
echo "taille du tableau = " . count($tabMixte);