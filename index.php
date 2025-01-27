<?php 

$server = "localhost";
$user = "root";
$password = "aliyo1004";
$table = "meetic";

$connexion = new PDO("mysql:host=$server;dbname=$table", "$user", "$password");
$connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$requete = $connexion->prepare('');
$requete->execute();
$resultat = $requete->fetchall();