<?php

function bonjour()
{
    echo "bonjour <br />";
}

function afficheSomme ( $a , $b) 
{
    echo $a+$b .  "<br />";
}

function afficheSommeType( int $a , int $b)
{
    echo $a+$b .  "<br />";
}
//fonction avec valeur de retour
function getSomme( int $a , int $b )
{
    return $a+$b;
}

// Fonctionne uniquement PHP7 (ici on indique que la donnée en retour doit etre un entier)
function getSomme7 (int $a , int $b) : int 
{
    return $a+$b;
}

bonjour();
afficheSomme(1 , 2);
afficheSommeType( 1 , 2 );
afficheSommeType( 1 , 2.0 );
// les deux lignes ne peuvent donner une résultat car somme avec chaine de caractere
//afficheSomme( 1 , "a" );
//afficheSommeType( 1 , "a" );

//appel de la fonction getSomme avec passage de 2 parametres 
//la valeur retour est retournée dans une variable $somme
$somme = getSomme(1 , 2);
echo "somme = $somme <br />";
$somme = getSomme7(1 , 2);
echo "somme = $somme <br />";

// definir un array $utilisateurs
// appler une fonction afficheUtilisateurs($utilisateurs)
echo " <br />";
echo "Liste des utilisateurs : ";
$utilisateurs = array ("jerome","nicolas","felix");
function afficheUtilisateurs ($users)
{
    foreach ($users as $nom) {
        echo "$nom -";
    }
}
//fonction ajout d'utilisateur
function ajouteUtilisateurs (&$users, $nom)
{
    //ajouter l'utilisateur à l'array
    array_push ($users, $nom);
    // appeler afficheUtilisateurs() pour afficher la nouvelle liste des utilisateurs
    afficheUtilisateurs ($users);
}
afficheUtilisateurs ($utilisateurs);
echo " <br />";
echo "  <br /> Liste des utilisateurs avec ajout : ";
ajouteUtilisateurs ($utilisateurs, "xavier");

//
function ajouteUtilisateurs2 ($users, $nom)
{
    array_push ($users, $nom);
    return $users   ;
}
$nouveauxUtilisateurs = ajouteUtilisateurs2 ($utilisateurs, "patrick");
echo " <br /> Liste des utilisateurs avec ajout complémentaire : ";
afficheUtilisateurs ($nouveauxUtilisateurs);

//calculer le nombre d'utilisateurs
function calculNbUtilisateurs ($users, &$nbUtilisateurs)
{
    $nbUtilisateurs = count($users);
}
$nbUtilisateurs = 0;
calculNbUtilisateurs ($utilisateurs, $nbUtilisateurs);
echo "<br/> Nombre utilisateurs = " . $nbUtilisateurs;
echo "</br>";

function ajouteUtilisateursOptionnel(&$users , $nom = "inconnu")
{
    array_push ($users, $nom);
    return $users;
}
ajouteUtilisateursOptionnel($utilisateurs, "toto");
echo "  <br /> valeurs optionnelle1 : ";
afficheUtilisateurs($utilisateurs);
ajouteUtilisateursOptionnel($utilisateurs);
echo "  <br /> valeurs optionnelle2 : ";
afficheUtilisateurs($utilisateurs);

