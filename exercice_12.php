<?php 
// definition de la fonction
function bonjour()
{
    echo "bonjour </br>";
}
// fonction somme
function afficheSomme( $a , $b)
{
    echo $a+$b . "</br>";
}
function afficheSommeType (int $a , int $b);
{
    echo $a+$b . "</br>";
}
// appel de la fonc tion
bonjour ();

afficheSomme (1,2);
afficheSommeType (1,2)
