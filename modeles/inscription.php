<?php

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

public function inscription() {

    if(isset($_POST['Send'])) {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $ville = $_POST['ville'];
        $mail = $_POST['email'];
        $pass = $_POST['password'];

        $req = $this->bdd->prepare("INSERT INTO User_meetic (lastname, firstname, city, email, passeword) VALUES ('$nom', '$prenom','$ville', '$mail,'$pass')");
        $req->execute();
    }
}
    
}


$connect = new Connected ();
$connect->inscription();