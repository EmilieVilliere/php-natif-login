<?php

require "Model.php";

try {

    if(isset($_GET["id"])) {
        $id = intval($_GET['id']);
        if ($id != 0) {

            if(isset($_POST["author"])) {

                $data = array(
                    $_POST["author"],
                    $_POST["content"],
                    $_GET["id"],
                );
                setComments($data);            
            }
           
            $article = getArticle($id);
            $comments = getComments($id);
            
            require "viewArticle.php";

        } else {

            throw new Exception("Identitifiant d'article incorrect");
        }
    } else {

        throw new Exception("Aucun identitifiant");
    } 

} catch (Exception $e) {

    $id = $_GET['id'];
    $msgError = $e->getMessage();
    require "viewError.php";

}

