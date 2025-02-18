<?php
include_once('smartbike.php');

// Définition d'une classe réservée aux utilisateurs
class userModel {
    private $user;

    public function __construct() {
        $this->user = smartbike::connexion();
    }
    
    // Récupération des champs saisis dans le formulaire
    public function getUserRequest() {
        if (isset($_POST['send-btn'])) {
            $lastname = $_POST['lastname'];
            $firstname = $_POST['firstname'];
            $email = $_POST['e-mail'];
            $message = $_POST['message'];

            try {
                $statements = $this->user->prepare("INSERT into users(nom, prenom, email, contenu) values (?, ?, ?, ?)");
                $statements->execute([$lastname, $firstname, $email, $message]);
                return $statements->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $error) {
                echo 'Erreur lors du traitement de votre demande '. $error;
            }
        }
    }
}