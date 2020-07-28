<?php

require "Model/Model.php";

function home() {

    $articles = getArticles();
    require "View/viewHome.php";

};

function article($id) {

    $article = getArticle($id);
    $comments = getComments($id);
    require "View/viewArticle.php";

};

function error($msgError) {

    require "View/viewError.php";

};

function comments($data) {

    setComments($data);

};

