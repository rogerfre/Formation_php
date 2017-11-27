<?php

$age = 20;
$majeur = 18;
// PSR
if ($age<$majeur){
    echo "mineur";
} elseif ($age==$majeur){
    echo "pile";
} else {
    echo "majeur";
}
