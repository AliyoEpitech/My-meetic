<?php

// header('Content-type: application/json');

class Connected {

    private $serveur = 'localhost';
    private $username ='root';
    private $password ='aliyo1004';
    private $db='My_meetic';
    private $bdd;

    public function __construct() {        
        try {
            $this->bdd = new PDO("mysql:host=$this->serveur;dbname=$this->db", $this->username,$this->password);
            $this->bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
            // $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        } catch(PDOException $e) {
            echo "erreur" . $e->getMessage();
        }
    }

    public function connexion() {

            $email = $_POST['email'];
            $password = $_POST['password'];
            if($email != "" && $password != "") {
                $requete = $this->bdd->query("SELECT * FROM User_meetic WHERE email = '$email' AND passeword = '$password'");
                $reponse = $requete->fetch();
                if($reponse['id'] != false) {
                    header('Location:/views/HTML/pageConnexion.html');
                    exit();
                } else {
                    echo 'Email ou mot de passe incorrect !';
                }
            }
    }
}


$connect = new Connected ();
$connect->connexion();