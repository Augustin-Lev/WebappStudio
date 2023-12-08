<?php

class HomeController {

    public function index(){
        
        // liaison a la base de donnée
        $DB = new DataBase();

        $Content = $DB->homeContent();
        
        require_once "views/header.php";
        require_once "views/home.php";
        require_once "views/footer.php";

    }

}

?>