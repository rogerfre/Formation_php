<?php

$fichier = "resources/monfichierdest.txt";

$machaine = "ciao tutto bene ?\n";
file_put_contents($fichier, $machaine, FILE_APPEND);
// pas besoin d'appeler fclose 

// suppression de fichier 
unlink($fichier);