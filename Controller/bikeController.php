<?php
include_once('./Model/bikeModel.php');

// Définition d'une classe pour transférer les informations récoltées depuis le dossier 'Model' aux pages du site SmartBike
class bikeController
{
    private $model;

    // Récupération des informations issues de la classe 'bikeModel'
    public function __construct()
    {
        $this->model = new bikeModel;
    }

    // Transmission des informations à la page 'bikes'
    public function bikes()
    {
        $bikes = $this->model->getAllBikes();
        include('./View/bikes.php');
    }

    // Transmission des informations à la page 'homepage'
    public function homepage()
    {
        $homepage = $this->model->getLastReleasedBike();
        include('./View/homepage.php');
    }
}
