<?php
include_once('bikeController.php');

// Définition d'une variable pour la redirection vers une page du site SmartBike
$page = (isset($_GET['page']) ? $_GET['page'] : 'homepage');

switch ($page) {
    case 'homepage':
        // echo "Bienvenue sur la page d'accueil du site SmartBike !\n";
        $homepage = new bikeController;
        $homepage->homepage();
        break;

    case 'bikes':
        // echo "Bienvenue sur la page dédiée aux vélos SmartBike !\n";
        $bikes = new bikeController;
        $bikes->bikes();
        break;

    case 'details':
        // echo "Bienvenue sur la page de présentation du vélo sélectionné !";
        $details = new bikeController;
        $details->details();
        break;

    case 'contacts':
        // echo "Bienvenue sur la page de contact du site SmartBike !\n";
}
