<?php
// REQUETES PREPAREES : Bonne pratique  
// Mots clés:  prepare , execute

$hostDB = "127.0.0.1";
$userDB = "formation";
$passDB = "formation";
$nameDB = "formation";
$charset = "utf-8";

// Chaine de connexion (toutes les informations dont PDO a besoin)
$dsn = "mysql:host=$hostDB;dbname=$nameDB";
$pdo = new PDO($dsn, $userDB, $passDB);

// Requete SQL qu'on souhaite exécuter
$email = "b@bb.fr";
$sql = "SELECT u_id,u_identifiant as identifiant,u_motdepasse,u_email FROM utilisateurs WHERE u_email = :email";

// Récupération du "statement" (curseur qui va parcourir les résultats)
$stmt = $pdo->prepare($sql);
$stmt->execute( ["email" => $email] );

while ( $ligne = $stmt->fetch())
{
    echo "j'ai trouve l'utilisateur: " . $ligne['identifiant'] . "<br/>";
}