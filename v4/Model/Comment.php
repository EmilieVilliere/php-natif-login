<?php 

require_once "Model/Model.php";

class Comment extends Model {

    public function getComments($art_id) { // on souhaite récupèrer les commentaires des articles

        $sql = 'SELECT * FROM comments WHERE art_id = ?';
        $comment = $this->executeRequest($sql, array($art_id)); 
        // on lui passe un array en param car on recupère les $art_id sous forme de tableau

        return $comment;
    }


    public function setComments($data) {

        $sql = 'INSERT INTO comments (com_author, com_date, com_content, art_id) VALUES (?, NOW(), ?, ?) ';
        $comment = $this->executeRequest($sql, array($data)); 
        
        return $comment;
    }

}