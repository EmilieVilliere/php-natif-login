<?php

class Vue {

    private $file;
    private $title;

    public function __contruct($action) {
        
        $this->file = 'View/View' . $action . '.php';
    
    }

    public function generate($data) {

        //générer le contenu de la vue (html)
        $content = $this->generateFile($this->file, $data);
        //utilisation le contenu spécifique qu'on vient de générer sur le template 
        $view = $this->generateFile('View/template.php', array('titre' => $this->title, 'contenu' => $content));
        //Renvoi la vue au navigateur 
        echo $view;
        
    }

    private function generateFile($file, $data) {

        if(file_exists($file)) {

            extract($data); // on rend les données accessible depuis le fichier
            ob_start(); // on actionne la mémoire tampon, on met en cache
            require $file; // on requiert fichier en question
            require ob_get_clean(); 
            // on vide le cache et on recupère le contenu de la mémoire tampon (html)

        } else { 

            throw new Exception("Fichier '$file' introuvable");
        }

    }
}