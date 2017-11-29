<?php 
// encours fro pas terminé ==> reprendre exercice14 felix formationphp
$equipe = array (
    array ( "id"=>1, "nom"=>"nicolas abc", "niveau"=>2, "age"=>27),
    array ( "id"=>2, "nom"=>"jerome def", "niveau"=>2, "age"=>18),
    array ( "id"=>3, "nom"=>"xavier ghi", "niveau"=>1, "age"=>15),
    array ( "id"=>4, "nom"=>"felix jkl", "niveau"=>3, "age"=>65)
);
//fro Programme principal
    foreach ($equipe as $membre){
        foreach ($membre as $attribut => $valeur){
            if ($attribut = "niveau"){
                // appel de la fonction niveau
                niveau ();
            }
            elseif ($attribut = "trancheAge") {
                // appel de la fonction trancheAge
                trancheAge (); 
            }
            else ($attribut = "trigramme"){
                // appel de la fonction trigramme
                trigramme ();
            }
        }
    }

//fro sous-programmes
 //gestion du niveau : debutant (1), intermediaire (2), expert (3)
function niveau ($niveauCode, $niveauTexte)
{
    if ($niveauCode = 1){
               
            }
           
        }
    }
}
// tranche age : mineur(0-17), majeur(18-60), senior(60+) 
function trancheAge ()
{

}
// trigramme : 1ere lettre du prenom + 2 premieres lettres du nom
function trigramme ()
{

}

// tableau a creer :id  trigramme  niveau  tranche age
