<?php

$xml = simplexml_load_file("resources/export.xml");

foreach ($xml->children() as $person) {

    foreach ($person->attributes() as $key => $value) {
        echo "j'ai trouve l'attribut " . $key . "(valeur = $value)\n";
    }
    
    foreach ($person->children() as $key => $value) {
        echo "j'ai trouve le noeud " . $key . "(valeur = $value)\n";
    }

}
