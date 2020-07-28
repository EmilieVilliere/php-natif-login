<?php

require_once "Model/Article.php";
require_once "Model/Comment.php";
require_once "View/View.php";

class ControllerArticle {

    private $article; //on déclare nos objets 
    private $comment; //utile à nos fonctions

    public function __construct() {

        $this->article = new Article();
        $this->comment = new Comment();
        
    }

    public function article($id) {

        $article = $this->article->getArticle($id);
        $comments = $this->comment->getComments($id);
        $view = new Vue("Article");
        $view->generate(array('article' => $article, 'commentaires' => $comments));

    }

    public function comment($data) {

        $this->comment->setComments($data);

    }

}