<?php

class DataBase{
    
    private $NameDB ; 
    private $UserDB ; 
    private $PasswordDB ;
    private $PDO;

 
    public function __construct(){
        $log = fopen("models/connect.csv","r");
        $line = 1;
        while (($line = fgetcsv($log)) !== FALSE) {
            // var_dump($line);
            $this->NameDB = $line[0];
            $this->UserDB = $line[1];
            $this->PasswordDB = $line[2];
        }
        fclose($log);

        try {
            $this-> PDO = new PDO('mysql:host=localhost;dbname='.$this->NameDB, $this->UserDB, $this->PasswordDB);
        }catch(PDOExeption $e){
            echo 'Erreur lors de la connection à la base de donées';
        }
    }

    public function getPDO(){
        return $this->PDO;
    }

    public function homeContent(){
        $HomeContent = array();
      
        foreach ($this-> PDO-> query('SELECT * FROM content', PDO::FETCH_ASSOC) as $Content){
            $HomeContent[$Content["name"]]=$Content["content"];

        }    
        return $HomeContent;
        
    }
  

}

