<?php 
// for
$valeurs = array ( 5, 10, 15, 20);

for ($i = 0; $i < count($valeurs); $i++){
    echo $valeurs[$i] . "<br/>";
}

//for each
$utilisateurs = array ();
$utilisateurs ["nom"]= "spotelli";
$utilisateurs ["prenom"]= "felix";

foreach ($utilisateurs as $cle => $valeur) {
    echo "clé = " . $cle . " - ";
    echo "valeur = " . $valeur . "</br>";
}

$inscrits = array("felix", "aurelie", "leo");
echo "inscrits : ";
foreach ($inscrits as $inscrit) {
    echo "inscrits - ";
    echo $inscrit . "</br>";
}
// avec les clés
foreach ($inscrits as $cle => $inscrit) {
    echo "inscrit avec clé = ";
    echo "$cle " . $inscrits[$cle] . " $inscrit" .  "</br>";
}
