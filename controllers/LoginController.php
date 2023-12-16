<?php

class LoginController {

    public function index(){
        
        // liaison a la base de donnée
        $DB = new DataBase();
        
        require_once "views/header.php";
        require_once "views/login.php";
        require_once "views/footer.php";

    }

}

?>