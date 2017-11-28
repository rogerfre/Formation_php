<?php 

// 1 creeer array en php avec
//  id prenom nom age
//  1 Felix SPORTELLI 32
//  2 Aurelie SPORTELLI 31
//  3 Leo SPORTELLI 5

$groupe = array (
    array ("id" => 1, 
            "prenom"=>"felix",
            "nom"=>"sportelli",
            "age"=>32,
            "sexe"=>"M"),
    array ("id" => 2, 
            "prenom"=>"aurelie",
            "nom"=>"sportelli",
            "age"=> 31,
            "sexe"=>"F"),
    array ("id" => 3,
            "prenom"=>"leo",
            "nom"=>"sportelli",
            "age"=> 5,
            "sexe"=>"")    
);

//2 Algo pour récupérer chaque ligne et en faire un tableau html
// récupération du nombre d'elemets dans le tableau
$nbrLignes = count($groupe);
echo $nbrLignes;
echo "<br/>";
echo "Groupe : <br/>";
echo "<table/>";
$i = 0;
while ($i < $nbrLignes){
// edition du contenu du tableau
// Tableau en HTML    
        echo "<tr>";
            echo "<td>" . $groupe[$i]["id"] . "</td>";
            echo "<td>" . $groupe[$i]["prenom"] . "</td>";
            echo "<td>" . $groupe[$i]["nom"] . "</td>";
            echo "<td>" . $groupe[$i]["age"] . "</td>";  
            echo "<td>" . $groupe[$i]["sexe"] . "</td>";                                  
        echo "</tr>";
    $i++;
}
    echo "<br/>";
    echo "</table>";

// autre façon
echo "Groupe 2 : <br/>";
echo "<table/>";
$i = 0;
$cles = array('id','prenom','nom','age','sexe');
while ($i < $nbrLignes){
// edition du contenu du tableau
// Tableau en HTML    
        echo "<tr>";
        $j = 0;
        $nbrCles = count($cles);
        while ($j < $nbrCles){
            if ( $cles[$j] != "sexe"){
            echo "<td>" . $groupe[$i][$cles[$j]] . "</td>";
            }
            else{
                $sexe = $groupe[$i][$cles[$j]];
                // sexe vaut M, F , autre chose
                // si afficher homme femme sinon inconnu
                if ($sexe=="M"){
                    echo "<td>" . "Homme". "</td>";
                }
                elseif ($sexe=="F"){
                    echo "<td>" . "Femme". "</td>";
                }
                else {
                    echo "<td>" . "Inconnu". "</td>";              
                }
            }
            $j++;             
        }                                
        echo "</tr>";
    $i++;
}
    echo "<br/>";
    echo "</table>";
