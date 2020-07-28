<?php

require "Model.php";

function checkInfos($data) {

    $login = $data[0];
    $password = $data[1];
    $infos = getInfos($login);

    if($infos["password"] === $password) {
      return true;
    }
    else {
      return false;
    }
}

try {

    if($_GET["action"] == "connexion") {
        
        if(isset($_GET["logged"])) {

            if(isset($_POST["pseudo"]) && isset($_POST["password"])) {

                $infos = array($_POST["pseudo"],$_POST["password"]);
                $logged = checkInfos($infos);

                if($_GET["logged"] == true && !empty($logged) && $logged == true) {
                    require "viewAdmin.php";
                
                } else {
                    require "viewLog.php";
                }
            } else {
                require "viewLog.php";
            }
        } else {
            require "viewLog.php";
        }
    } else {
        
        throw new Exception("Action non valide");
    }
}
catch (Exception $e) {

    $msgError = $e->getMessage();
    require "viewError.php";

}
