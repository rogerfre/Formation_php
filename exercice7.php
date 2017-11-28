<?php

$age = 18;

// Si age < 18, alors indiquer "mineur"
// sinon, afficher majeur
$msg = ($age < 18) ? "mineur" : "majeur";

echo $msg;

//$nom = "";
$nom = "felix";
$defaut = "XY";

$msg = ($nom == "") ? $defaut : $nom;

echo "<br/>$msg<br/>";


$nomMarital = "sportelli";
$nomJeuneFille = "heilig";
$nomDefaut = "defaut";

// Nom vaut nom marital s'il existe
// Sinon vaut nom de jeune fille s'il existe
// Sinon vaut défaut

// En deux étapes
$nomJF = ($nomJeuneFille == "") ? $nomDefaut : $nomJeuneFille; 
$nom = ($nomMarital == "") ? $nomJF : $nomMarital;
echo "<br/>$nom<br/>";

// En une étape 
$nom = ($nomMarital == "") ? (($nomJeuneFille == "") ? $nomDefaut : $nomJeuneFille ) : $nomMarital;

echo "<br/>$nom<br/>";

// PHP 7 : Null Coalesce
$nom = $nomMarital ?? $nomJeuneFille ?? $nomDefaut ?? "la valeur par défaut" ;
echo "<br/>$nom<br/>";