<?php 

function getBdd() {

    // Objet de connexion à la bdd
    $bdd = new PDO('mysql:host=localhost;dbname=monsite;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); // gère les exceptions et les erreurs
    return $bdd;
}

function getArticles() {

    $bdd = getBdd(); // On ouvre la connexion à la bdd

    // On récupère les articles grâce à une requête SQL
    $articles = $bdd->query('SELECT * FROM articles');

    return $articles;
}

function getArticle($id) { // On veut récupère les articles en fonction de leur id

    $bdd = getBdd(); // on construit une requête en passant l'id comme recherche
    $article = $bdd->prepare('SELECT * FROM articles WHERE id = ?');
    // on passe la méthode execute à notre variable pour lui passer le param à la place du = ?
    $article->execute(array($id)); // obligatoirement un array pour utiliser cette méthode
    
    // et on recupère un objet, on doit pour cela, utiliser fetch()

    if($article->rowCount() == 1) { // on verifie bien qu'au moins une réponse nous est envoyée

        return $article->fetch();

    } else { // sinon, je lui demande de gérer les erreurs et envoyer un message d'erreur 

        throw new Exception("Aucun article ne correspond à l'id" . $id); 

    }

}

function getComments($art_id) { // on souhaite récupèrer les commentaires des articles

    $bdd = getBdd();
   
    $comments = $bdd->prepare('SELECT * FROM comments WHERE art_id = ?');
    $comments->execute(array($art_id));

    return $comments;
}

function setCommentaire($data) {
    $bdd = getBdd();
    $request = $bdd->prepare("INSERT INTO t_commentaires(com_date,com_auteur,com_contenu, art_id) VALUES(NOW(),?,?,?)");
    $request->execute($data);
  }
  

function getInfos($pseudo) {

    $bdd = getBdd();

    $infos = $bdd->prepare("SELECT * FROM users WHERE pseudo= ?");
    $infos->execute(array($pseudo));

    if($infos->rowCount() == 1) {

        return $infos->fetch(); // Récupère la première ligne d'un jeu de résultats
    
    } else {
        
        return false;
    }
}


