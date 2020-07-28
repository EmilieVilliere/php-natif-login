<?php 

require "Model.php";

function getBdd() {

    // Objet de connexion à la bdd
    $bdd = new PDO('mysql:host=localhost;dbname=monsite;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); // gère les exceptions et les erreurs
    return $bdd;
}

// function setComments($data) {

//     $bdd = getBdd();

//     $request = $bdd->prepare('INSERT INTO comments (com_author, com_date, com_content, art_id) VALUES (?, NOW(), ?, ?) ');
//     $request->execute($data);
// }
