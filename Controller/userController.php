<?php
include('../Model/userModel.php');

// Définition d'une classe réservée au traitement des informations des utilisateurs
class userModel {
    private $model;

    // Récupération des informations issues de la classe 'userModel'
    public function __construct() {
        $this->model = new userModel;
    }

    // Transfert des informations vers la page 'contact'
    public function contact() {
        include('./View/contact.php');
    }
}