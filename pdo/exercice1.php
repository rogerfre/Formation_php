<?php

$hostDB = "127.0.0.1";
$userDB = "formation";
$passDB = "formation";
$nameDB = "formation";
$charset = "utf-8";

// Chaine de connexion (toutes les informations dont PDO a besoin)
$dsn = "mysql:host=$hostDB;dbname=$nameDB";
$pdo = new PDO($dsn, $userDB, $passDB);

// Requete SQL qu'on souhaite exécuter
$sql = "SELECT u_id,u_identifiant as identifiant,u_motdepasse,u_email FROM utilisateurs";

// Récupération du "statement" (curseur qui va parcourir les résultats)
$stmt = $pdo->query($sql);

while ( $ligne = $stmt->fetch())
{
    echo "j'ai trouve l'utilisateur: " . $ligne['identifiant'] . "<br/>";
}