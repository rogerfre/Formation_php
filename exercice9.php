<?php 

$niveau = 5; 

switch ($niveau){
    case 0:
        echo "débutant";
        break;
    case 1:
        echo "intermediaire";
        break;
    case 2:
        echo "expert";
        break;
    default:
        echo "inconnu";
        break;
}

echo "<br /><br />";

$lang = "IT";
// Tester FR, IT, EN, DE
// Afficher Français, Italien, Anglais, Allemand
switch ($lang){
    case "FR":
        echo "Français";
        break;
    case "IT":
        echo "Italien";
        break;
    case "DE":
        echo "Allemand";
        break;
    default:
        echo "Inconnu";
        break;
}