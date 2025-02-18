<?php
include_once('./Model/userModel.php');

// Définition d'une classe réservée au traitement des informations des utilisateurs
class userController {
    private $model;

    // Récupération des informations issues de la classe 'userModel'
    public function __construct() {
        $this->model = new userModel;
    }

    // Transfert des informations vers la page 'contact'
    public function contact() {
        $contact = $this->model->getUserRequest();
        include('./View/contact.php');
    }
}