<?php
    require_once("db.php");


    // Permet de recuperer toutes les boutiques
    function getAll()
    {
        try {
            $req = "SELECT * FROM boutiques b WHERE b.etat=1";
            return getConnexion()->query($req);
        } catch (PDOException $error) {
            die("Erreur sur la recupération de la liste des boutiques" . $error->getMessage());
        }
    }

    // Permet de recuperer la boutique d'un vendeur
    function get($idVendeur)
    {
        try {
            $req = "SELECT * FROM boutiques b WHERE b.etat=1 AND
            createdby='$idVendeur' LIMIT 0,1";
            return getConnexion()->query($req);
        } catch (PDOException $error) {
            die("Erreur sur la recupération de la boutique du vendeur d'id {$idVendeur}" . $error->getMessage());
        }
    }
?>