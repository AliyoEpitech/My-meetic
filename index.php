<?php 

include("./DossierHTML/inscription.html");

$server = "localhost";
$user = "root";
$password = "aliyo1004";
$table = "My_meetic";

$connexion = new PDO("mysql:host=$server;dbname=$table", "$user", "$password");
$connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$requete = $connexion->query('SELECT * FROM User_meetic;');
$requete->execute();
$resultat = $requete->fetchall();

$tableau=[];

foreach($resultat as $user){
    array_push($tableau, $user);
}

echo json_encode($tableau);

// $serveur = "127.0.0.1";
// $username = "root";
// $password = "aliyo1004";
// $db = "My_meetic";

// try{
//     $connexion = new PDO("mysql:host=$serveur;dbname=$db","$username","$password");
//     $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    

// } catch(PDOException $e) {
//     die("BRUHHHH");
//     $e->getMessage();
// }


