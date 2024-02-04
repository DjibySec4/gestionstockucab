<?php

    // Permet de se connecter à la BD
    function getConnexion()
    {
        $host = "localhost"; //Pour dire que la BD est dans notre machine
        $dbname = "gestionstockucab"; //Nom de la BD
        $user = "root"; //User de mysql par défaut
        $password = ""; //User root na pas de mot de passe par defaut

        $dsn = "mysql:host=$host;dbname=$dbname";

        try {
            $db = new PDO($dsn, $user, $password);
        } catch (PDOException $error) {
            die("Erreur de connexion à la BD" . $error->getMessage());
        }
        return $db;
    }
?>