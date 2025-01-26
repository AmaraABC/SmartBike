<?php
include_once('smartbike.php');

// Définition d'une classe pour l'affichage des vélos dans la page 'bikes'
class bikeModel
{
    private $bike;

    // Connexion à la base de données via ce constructeur
    function __construct()
    {
        $this->bike = smartbike::connexion();
    }

    // Requête pour récupérer le dernier vélo publié
    public function getLastReleasedBike()
    {
        return $this->bike->query("SELECT * from bikes order by datepublication desc limit 1")->fetchAll(PDO::FETCH_ASSOC);
    }

    // Requête pour afficher tous les vélos présents dans la base de données 'SmartBike' à partir du plus récent
    public function getAllBikes()
    {
        return $this->bike->query("SELECT * from bikes order by datepublication desc")->fetchAll(PDO::FETCH_ASSOC);
    }

    // Requête qui renvoie un vélo en fonction de son identifiant
    public function getBikeById($id)
    {
        return $this->bike->query("SELECT * from bikes where id_velo = '$id'");
    }
}
