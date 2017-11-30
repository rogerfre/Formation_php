<?php

$fichier = "resources/monfichier.txt";

// file_get_contents
echo "file_get_contents : <br />";
$contenu = file_get_contents($fichier);
echo $contenu;
echo "<br /><br />";

// fopen + fgets
echo "fopen + fgets : <br />";
$inputFile = fopen($fichier, "r");
if ($inputFile){
    while ( ($line = fgets($inputFile)) != false)
    {
        echo $line . "<br/>";
    }
}
fclose($inputFile);