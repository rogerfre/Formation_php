<?php
//passage en parametre une valeur par defaut
function sommeOptionnelle (int $a = 1 , int $b = 2 )
{
    return $a + $b;
}
//
echo sommeOptionnelle( 1 , 2 ) . "</br>";
echo sommeOptionnelle( 1 ) . "</br>";
echo sommeOptionnelle() . "</br>";
