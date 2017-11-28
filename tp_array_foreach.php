<?php
/**
 * Enoncé : 
 * 1. Définir un array PHP représentant : 
 *  Array PHP 
 *      id prenom nom age sexe 
 *      1 Felix SPORTELLI 32 M
 *      2 Aurelie SPORTELLI 31 F
 *      3 ...
 * 
 * 2. Trouver l'algorithme permettant de récupérer 
 * chaque ligne de l'array et en faire un tableau HTML
 * 
 * 
 * 3. Si sexe = M , afficher "Homme", si sexe = F, afficher "Femme"
 * sinon afficher "Inconnu"
 * 
 */

// On définit notre array
$famille = array (
        array ( "id" => 1 , "prenom" => "Felix", "nom" => "SPORTELLI" , "age" => 32, "sexe" => "M"),
        array ( "id" => 2 , "prenom" => "Aurelie", "nom" => "SPORTELLI" , "age" => 31, "sexe" => "F"),
        array ( "id" => 3 , "prenom" => "Lea", "nom" => "SPORTELLI" , "age" => 3, "sexe" => ""),
);

echo "<table>";
echo "<thead><tr><th>ID</th><th>Prenom</th><th>Nom</th><th>Age</th><th>Sexe</th></tr></thead>";
echo "<tbody>";
// On parcours l'array 
//$cles = array ('id', 'prenom', 'nom', 'age', 'sexe');
foreach ($famille as $membre)
{
    echo "<tr>";   
        foreach (
            $cles as $attribut) {
            if ( $attribut != "sexe"){
                echo "<td>" . $membre[$attribut] . "</td>";
            }
            else {
                $sexe = $membre[$attribut];
    
                // $sexe vaut M, F ou autre chose 
                if ($sexe == "M"){
                    echo "<td>" . "Homme". "</td>";
                }
                elseif ($sexe == "F") {
                    echo "<td>" ."Femme". "</td>";
                } else {
                    echo "<td>" ."Inconnu". "</td>";
                }
            }
        }
    echo "</tr>";
}

echo "</tbody>";
echo "</table>";