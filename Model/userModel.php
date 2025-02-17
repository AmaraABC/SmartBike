<?php
include('smartbike.php');

// Définition d'une classe réservée aux utilisateurs
class userModel {
    private $user;

    public function __construct() {
        $this->user = smartbike::connexion();
    }    
}