<?php 

abstract class Model {

    private $bdd; // on déclare la fonction privée 

    protected function executeRequest($sql, $data = null) { // on prépare l'exe de la requête 

        if($data == null) { // si il n'y a pas encore de data
            $result = $this->getBdd()->query($sql); // effectuer une requête
        
        }
        else { // sinon, on l'a prépare à être envoyée en bdd
            $result = $this->getBdd()->prepare($sql);
            $result->execute($data); // execution !
        }

        return $result;
    }
    
    private function getBdd() { // on active la visibilité ou non de notre variable

        if($this->bdd == null) {
            // Objet de connexion à la bdd
            $this->bdd = new PDO('mysql:host=localhost;dbname=monsite;charset=utf8', 'root', '', 
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); // gère les exceptions et les erreurs
        } 
        return $this->bdd;
    }

}
