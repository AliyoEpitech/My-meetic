<?php

require_once 'envloader.php'; // Charger .env

class Connected {

    private $serveur;
    private $username;
    private $password;
    private $db;
    private $bdd;

    public function __construct() {
        // Charger les variables d'environnement
        loadEnv(__DIR__ . '/.env');

        $this->serveur = $_ENV['DB_SERVER'];
        $this->username = $_ENV['DB_USER'];
        $this->password = $_ENV['DB_PASSWORD'];
        $this->db = $_ENV['DB_NAME'];

        try {
            $this->bdd = new PDO(
                "mysql:host={$this->serveur};dbname={$this->db}",
                $this->username,
                $this->password
            );
            $this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        } catch (PDOException $e) {
            echo "Erreur de connexion : " . $e->getMessage();
        }
    }

    public function connexion() {
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Important : utiliser une requête préparée pour éviter les injections SQL !!
            $stmt = $this->bdd->prepare("SELECT * FROM User_meetic WHERE email = :email AND passeword = :password");
            $stmt->execute([
                'email' => $email,
                'password' => $password
            ]);
            $reponse = $stmt->fetch();

            if ($reponse && $reponse['id']) {
                header('Location: /views/HTML/pageConnexion.html');
                exit();
            } else {
                echo 'Email ou mot de passe incorrect !';
            }
        }
    }
}

$connect = new Connected();
$connect->connexion();
?>
