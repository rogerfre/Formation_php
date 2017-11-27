<?php

$pere = array (
    "id" => 1,
    "prenom" => "felix",
    "nom" => "sportelli"
);
var_dump($pere);  
echo "<br/><br/>";
$mere = array (
    "id" => 1,
    "prenom" => "marie",
    "nom" => "sportelli"
);
var_dump($mere); 
echo "<br/><br/>";

$enfants = array (
    array ("id" => 3,
            "prenom"=>"leo",
            "nom"=>"sportelli"),
    array ("id" => 4,
            "prenom"=>"lea",
            "nom"=>"sportelli")    
);
var_dump($enfants);
echo "<br/><br/>";
echo "editer la famille";
echo "<br/>";
$famille = array (
   "pere" => $pere,
    "mere" => $mere,
    "enfants" => $enfants
);
var_dump($famille);
echo "<br/><br/>";
//echo premier enfant de la famille
var_dump($famille["enfants"][0]["prenom"]);
echo "<br/><br/>";
// nbr d'enfants dans la famille
echo "nbr enfants dans la famille = " . count($famille["enfants"]);
$nbEnfants = count($famille["enfants"]);
echo "<br/><br/>";
// prenom du dernier enfants
// -1 car l'indice commence à 0 
echo "prenom dernier enfant : " . $famille["enfants"][$nbEnfants-1]["prenom"];

echo "<br/><br/>";

// nouvelle entrée dans le tableau famille : le nombre d'enfants
echo "nouvell entrée dans le tableau";
echo "<br/>";
$famille["nbEnfant"] = $nbEnfants;
var_dump($famille);















