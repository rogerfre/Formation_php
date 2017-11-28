<?php
$a = 2;
$b = 3;
$c = 4;

echo $a + $b;
echo "<br />";
echo $a - $b;
echo "<br />";
echo $a * $b;
echo "<br />";

echo $a / $b;
echo "<br />";

// Division castée en entier
echo (int) ($a / $b);
echo "<br />";

// Division arrondie
echo round($a / $b);
echo "<br />";

// Division arrondie avec 2 décimales
echo round($a / $b , 2);
echo "<br />";

echo $c % $b ; // 4%3
echo "<br />";