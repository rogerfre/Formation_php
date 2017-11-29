<?php 
// definir une chaine de caracteres
$str = "mardi 28 novembre, formation PHP. c'est le deuxieme jour. Semaine 2\n";
echo $str;
// en majuscule
echo strtoupper($str);
// en minuscule
echo strtolower($str);
// capitalize
echo ucfirst($str);
// antislasher
echo addslashes($str);
//recuperer la position de la virgule
echo strpos($str, "," ) ."\n";
//extraire une partie de ma chaine
echo substr($str, 18) . "\n";
//supprimer les espaces au début et à la fin de la chaine
$sousChaine = substr($str, 18);
echo trim ($sousChaine) . "\n";
//extraire une partie de ma chaine sur n caractere
echo substr($str, 0, 5) . "\n";
//transformation d'une chaine en tableau selon un caractere
print_r(explode("." , $str));
//transformation d'un tableau en chaine de caractere
$participants = array ("alain","pierre","paul");
echo(implode(";", $participants)) . "\n";
//
$msg = "Bonjour #nom# et bienvenue #nom#";
echo substr_replace($msg, "felix" , 8 , 5) . "\n";
//
echo str_replace("#nom#", "felix", $msg) . "\n";
//combien de fois la variable a ete remplacée
echo str_replace("#nom#", "felix", $msg, $nb) . "\n";
echo $nb . "\n";