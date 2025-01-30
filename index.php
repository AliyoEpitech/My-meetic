<?php 

class Connected {

    private $serveur⁼'localhost';
    private $username ='root';
    private $password ='aliyo1004';
    private $db='My_meetic';
    private $pdo;

    public function _construct($db, $username, $password) {
        $this->username = $username;
        $this->password = $password;

        try {
            $bdd = new PDO(
                "mysql:host=localhost;dbname={$db};charset=utf8mb4",
                $this->username,
                $this->password
            );
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            $this->serveur = $bdd;
            echo "connected";
        }

        catch(PDOException $e)
        {
            $msg = 'ERREUR PDO dans' . $e->getFile() . 'L' . $e->getLine() . ':' . $e->getMessage();
            die($msg);
        }
    }
}


$connect = new Connected ($db, $username, $password);
$sql = "SELECT * FROM User_meetic";
$requete = $serveur->query($sql);
print_r($requete);


// print_r($connect);
// $requete = $connect->prepare("SELECT * FROM User_meetic);
// $requete->execute();
// $resultat = $requete->fetchall();
// print_r($resultat);

// echo $connect;
// $serveur = "127.0.0.1";
// $username = "root";
// $password = "aliyo1004";
// $db = "My_meetic";

// try{
//     $connexion = new PDO("mysql:host=$serveur;dbname=$db","$username","$password");
//     $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     $requete = $connexion->query('SELECT email, passeword FROM User_meetic;');
//     $"requete->execute();
//     $resultat = $requete->fetchall(PDO::FETCH_ASSOC);

//     $tableau=[];

//     foreach($resultat as $user){
//     array_push($tableau, $user);
//     }

//     echo json_encode($tableau);

// } catch(PDOException $e) {
//     die("Erreure Brother") . $e->getMessage();
// }


