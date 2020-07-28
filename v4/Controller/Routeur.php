<?php 

require_once "Controller/ControllerHome.php";
require_once "Controller/ControllerArticle.php";
require_once "View/View.php";

class Routeur {

    private $ctrlHome;
    private $ctrlArticle;
    
    public function __construct() {

        $this->ctrlHome = new ControllerHome();
        $this->ctrlArticle = new ControllerArticle();

    }

    private function error($msgError) {
        $view = new Vue("Error");
        $view->generate(array('msgError' => $msgError));
    }

    public function routeurRequest() {

        try { // et de les passer ici en appellant les fonctions 

            if(isset($_GET["action"])) {
        
                if($_GET["action"] == "article") {
        
                    if(isset($_GET["id"])) {
                        $id = intval($_GET['id']);
                        if ($id != 0) {
                
                            if(isset($_POST["com_author"])) {
                
                                $data = array(
                                    $_POST["com_author"],
                                    $_POST["com_content"],
                                    $_GET["id"],
                                );

                                $this->ctrlArticle->comment($data);           
                            }
                            
                            $this->ctrlArticle->article($id);
                
                        } else {
                
                            throw new Exception("Identitifiant d'article incorrect");
                        }
                    } else {
                
                        throw new Exception("Aucun identitifiant");
                    } 
                } else {
        
                    throw new Exception("Action non valide");
                }
            } else {
        
                $this->ctrlHome->home();
        
            }
        } catch (Exception $e) {

            error($e->getMessage());
        
        }        

    }

}