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
    
    // public function RequeteSQL($sql) {

    //     try{
    //         $stmt = $this->bdd->query($sql);
    //         $resultat = $stmt->fetchall();
    //         $tbl = [];
    //         foreach($resultat as $value) {
    //             array_push($tbl, $value);
    //         }
    //         echo json_encode($tbl);
    //     } catch(PDOException $e) {
    //         echo "erreur lors de l'execution de la requete" . $e->getMessage();
    //     }
    // }
}

$connect = new Connected ();
// $sql = "SELECT * FROM User_meetic;";
// $connect->RequeteSQL($sql);

