<?php

// Définition d'une classe pour la connexion avec la base de données sur pgAdmin 4
class smartbike
{
    public static function connexion()
    {
        try {
            $bdd = new PDO('pgsql:host=localhost;port=5432;dbname=smartbike', 'postgres', 'epiphany212RA_');
            // echo "Connexion à la base de données effectuée avec succès !\n";
            return $bdd;
        } catch (Exception $e) {
            echo $e;
        }
    }
}

// Lancement de la connexion
smartbike::connexion();
