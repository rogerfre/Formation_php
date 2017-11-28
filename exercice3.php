<?php

$pere = array (
        "id" => 1,
        "prenom" => "felix",
        "nom" => "sportelli"
);



$mere = array (
    "id" => 2,
    "prenom" => "aurelie",
    "nom" => "sportelli"
);


$enfants = array (
    array ("id" => 3, 
            "prenom"=>"leo",
            "nom"=>"sportelli"),
    array ("id" => 4, 
            "prenom"=>"lea",
            "nom"=>"sportelli")
);


$famille = array ( 
    "pere" => $pere,
    "mere" => $mere,
    "enfants" => $enfants
);

var_dump($famille);
echo "<br /><br />";

//var_dump($famille["enfants"][0]["prenom"]);

// Nombre d'enfants : 
$nbEnfants = count($famille["enfants"]);
//echo "Nb enfants: " . count($famille["enfants"]);

// Prenom du dernier enfant : 
//echo "Prenom petit dernier: ";
//echo $famille["enfants"][$nbEnfants-1]["prenom"];

$famille["nbEnfant"] = $nbEnfants;
var_dump($famille);