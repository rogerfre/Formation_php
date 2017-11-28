<?php 


// Iterations 

// While
$i = 0;
while ($i++ < 10){
    echo "j'en suis à $i <br/>";
}

// Do While 
$i = 0;
do {
    echo "j'en suis à $i <br/>";
} while ($i++ < 10);

$apprenants = ["frederique",
                "jerome", 
                "nicolas",
                "patrick",
                "xavier"];

echo "Apprenants : <br/>";
echo "<ul>";
$i = 0;
while ($i < count($apprenants)){
    echo "<li>$apprenants[$i]</li>";
    $i++;
}
echo "</ul>";

echo "Apprenants : <br/>";
echo "<ul>";
$i = 0;
do {
    echo "<li>$apprenants[$i]</li>";
}while ($i++ < count($apprenants) -1 );
echo "</ul>";