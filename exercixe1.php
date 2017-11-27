<?php
// ceci est un commentaire
//ou
/** ceci
 * est
 * un commentaire multi-ligne
 * comme ce sont des commentaires php il n'arrivent pas dans le html
 */
echo "bonjour ";
?>
<!--commentaire html-->
<?php
echo "hello ";

echo "fro ";
$age = 12;
echo $age;

$nom ="fro ";
echo $nom;

$isOK = true;
$i = 5;
$j = 2.3;
$nom = "Frédérique ROGER";

echo "je me nomme $nom et j'ai $age ans";

// Affichage différentes façon d'editer
echo "bonjour " . $nom;
?><br /> <?php
print_r($nom);
var_dump($nom);
