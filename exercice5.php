<?php

$a = 5;

// Incrémente de 1
$a = $a + 1;
$a += 1;  
$a++;
++$a;

echo "valeurs de A : ";
echo $a . "<br/>"; //9
echo $a++. "<br/>"; //9 => 10
echo $a. "<br/>"; // 10
echo ++$a. "<br/>"; // 11

$a *= 5;
echo $a. "<br/>"; // 55

$a /= 5;
echo $a. "<br/>"; // 11

// Idem avec les String 
echo "bonjour " . "felix" . "<br/>";
$bonjour = "bonjour";
$felix = "felix";
$str = "";
$str .= $bonjour;
$str .= " ";
$str .= $felix;
$str .= "<br />";
echo $str;