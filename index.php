<?php
session_start();

//si le fichier connect n'existe pas, on appel l'initialisation
if (!file_exists('models/connect.csv')){
    require_once 'models/Initialisation.php'; // les routes ne sont pas encore définis
}else{
    
    $log = fopen("models/connect.csv","r");
    $line = 1;
    while (($line = fgetcsv($log)) !== FALSE) {
        // var_dump($line);
        if ($line[0] != "NameDB"){
            define("BASE_URL",$line[7]);    
        }
    }
    fclose($log);


// inclusion des classes
require_once 'models/Router.php';
require_once 'models/DataBase.php';
require_once 'controllers/HomeController.php';



//instanciation des classes
$router = new Router();

//Définition des routes 
$router->addRoute("GET",BASE_URL.'/','HomeController','index');
$router->addRoute("POST",BASE_URL.'/','HomeController','index');
$router->addRoute("GET",BASE_URL.'/initialisation','Init','index');


$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];
//var_dump($method);
// var_dump($uri);

$handler = $router->getHandler($method,$uri);
// handler = [mehtode=>"GET",controller=>"HomeController",action=>"index"]

if ($handler === NULL){
    //require_once 'views/lost.php';
    header('HTTP/1.1 404 not found');

}else{   


    //Appel du controller
    $controller = new $handler['controller']();
    $action = $handler["action"];
    $controller->$action();

}
}
?>