<?php

require "Model.php";

try { // on tente de lui passer des variables et des vues

    $articles = getArticles(); 

    require "viewHome.php"; // puis de les envoyer dans la vue d'accueil 

} catch(Exception $e) {  // s'il échoue, 

    $msgError = $e->getMessage(); // on lui demande de capter les erreurs log
    require "viewError.php"; // et de les envoyer à la vue d'erreur

}
