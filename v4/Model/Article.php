<?php 

require_once "Model/Model.php";

class Article extends Model {

    
    public function getArticles() {

        // variable qui conteient la requête, elle même, en tant que paramètre dans la méthode executeRequest
        $sql = 'SELECT * FROM articles'; 
        $articles = $this->executeRequest($sql); // on utilise la méthode executeRequest qui gère la procédure

        return $articles;
    }

    public function getArticle($id) { // On veut récupère les articles en fonction de leur id

        $sql = 'SELECT * FROM articles WHERE id = ?';
        $article = $this->executeRequest($sql, array($id)); // on lui passe un tableau car on recupère les $id sous forme de tableau

        if($article->rowCount() == 1) { // on verifie bien qu'au moins une réponse nous est envoyée

            return $article->fetch();

        } else { // sinon, je lui demande de gérer les erreurs et envoyer un message d'erreur 

            throw new Exception("Aucun article ne correspond à l'id" . $id); 

        }

    }


}