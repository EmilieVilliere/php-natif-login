<?php

// maintenant que nous avons passer nos functions majeures dans le controller, 

require "Controller/Routeur.php"; // nous avons juste besoin d'appeler le fichier dans lesquelles elles se trouvent

$routeur = new Routeur();
$routeur->routeurRequest();