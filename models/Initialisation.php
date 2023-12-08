<!DOCTYPE php>
<html>
    <head>
    <meta charset="UTF-8">
        <link rel="stylesheet" href="views\style\stylesheet.css">
        <title>Initialisation</title>
        <meta name= "description" content="
        Page d'initialisation'
        ">
    </head>
    <body class="init">
    <?php
        // var_dump($_POST);
        // require "../model/Bdd.php";
        // require 'views/bandeau.php';
        function printForm(){
            echo'
            
            <p>En vue de la bonne installation du site, nous vous demandons les information suivantes :<br/>
            - Si un bug persiste au niveau du téléchargement des images, reconfigurez le php.ini et augmentez "upload_max_filesize"<br/>
            - Vérifie que les variables "display_startup_errors" et "display_errors" du php.ini du serveur soit à "OFF" 
            - Vérifie que la variable "upload_max_filesize" soit à 7M </p>
            <form class="loginForm" action="" method="POST" id="newPassword">
                <label for="NameDB">Nom de la base de donnée</label>
                <input type="text" name="NameDB" value="u734868843_studio" required="">
        
                <label for="UserDB">Utilisateur de la base de donnée</label>
                <input type="text" name="UserDB" value="u734868843_augustin" required="">
        
                <label for="passwordDB">Mot de passe de la base de donnée</label>
                <input type="text" name="passwordDB" value="4a:P:N6u:LKZ" required="">
        
                <label for="name">Nom</label>
                <input type="text" name="name" value="Parrot" required="">
        
                <label for="surname">Prénom</label>
                <input type="text" name="surname" value="Vincent" required="">
        
                <label for="email">Adresse mail</label>
                <input type="text" name="email" value="vp@garage.fr" required="">
        
                <label for="password">Mot de passe de l\'administrateur</label>
                <input type="text" name="password" value="Respect2parrot?" id="mdp" required="">

                <label for="password">Vérification du mot de passe</label>
                <input type="text" name="confirm" value="" id="confirm" required="">

                <div id="indiceMDP"> </div>
                <p id="erreur">ERREUR, le mot de passe ne respecte pas les consignes ou n\'est pas identique</p>

                <label for="base_url"> Dossier dans lequel se trouve le site (mettre "")</label>
                <input type="text" name="base_url" value="/WebappStudio" required="">
        
                <input type="hidden" name="action" value="fillDB" >
                <button class="boutton" type="submit"> remplissage de la base</button>
            </form>
            <script src="views/script/login.js"></script>
            ';
           
        }

        function fillDB($NameDB,$UserDB,$passwordDB,$name,$surname,$email,$password){
         
            try {
                $PDO = new PDO('mysql:host=localhost;dbname='.$NameDB, $UserDB, $passwordDB); //conexion à la base
            }catch(PDOExeption $e){
                echo '<li>Erreur lors de la connection à la base de donées</li>';
            }
            
            $lorem = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis ex, eum deleniti dicta corrupti culpa consectetur perferendis architecto veritatis exercitationem illum animi ducimus doloremque amet cum consequuntur consequatur iusto quia!';
            
            $Content = [
                ["PrentationTitle","Qui sommes nous ?"],
                ["PresentationParagraph",$lorem],
                ["ExeperienceYears","10 ans"],
                ["ServciceFrequency","30 ans"],
                ["actifsMembers","60"],
                ["PortfolioParagraph",$lorem],
                ["ServiceProcessTitle","Déroulement de nos préstations"],
                ["ServiceProcess1Title","Devis"],
                ["ServiceProcess1Paragraph",$lorem],
                ["ServiceProcess2Title","Payement"],
                ["ServiceProcess2Paragraph",$lorem],
                ["ServiceProcess3Title","Préstation"],
                ["ServiceProcess3Paragraph",$lorem],

                ["Service1Title","Association UniLaSalle"],
                ["Service1Paragraph1","Photographes 8€/h"],
                ["Service1Paragraph2","Retouches gratuites"],
                ["Service1Paragraph3","Vidéastes 8€/h"],
                ["Service1Paragraph4","Montage Vidéo 8€/min"],

                ["Service2Title","Entreprise"],
                ["Service2Paragraph1","Photographes 8€/h"],
                ["Service2Paragraph2","Retouches gratuites"],
                ["Service2Paragraph3","Vidéastes 8€/h"],
                ["Service2Paragraph4","Montage Vidéo 8€/min"],

                ["Service3Title","Autre"],
                ["Service3Paragraph1","Mariage"],
                ["Service3Paragraph2","Soirée"],
                ["Service3Paragraph3","Conférence"],
                ["Service3Paragraph4","Séminaire"],

                ["RespoPrestaNom","Augustin Penou"],
                ["RespoPrestaPhone","0766540330"],
                ["RespoPrestaMail","augustin.penou@etu.unilasalle.fr"],
                ["RespoPrestaMessenger","augustin_penou"],

                ["OfficeMemberTitle1","Secrétaire"],
                ["OfficeMemberName1","Chloé Delamarre"],
                ["OfficeMemberTitle2","Secrétaire"],
                ["OfficeMemberName2","Chloé Delamarre"],
                ["OfficeMemberTitle3","Secrétaire"],
                ["OfficeMemberName3","Chloé Delamarre"],
                ["OfficeMemberTitle4","Secrétaire"],
                ["OfficeMemberName4","Chloé Delamarre"],
                ["OfficeMemberTitle5","Secrétaire"],
                ["OfficeMemberName5","Chloé Delamarre"],
                ["OfficeMemberTitle6","Secrétaire"],
                ["OfficeMemberName6","Chloé Delamarre"],
                ["OfficeMemberTitle7","Secrétaire"],
                ["OfficeMemberName7","Chloé Delamarre"],
                ["OfficeMemberTitle8","Secrétaire"],
                ["OfficeMemberName8","Chloé Delamarre"],           
                                
            ];

            foreach($Content as $ContentItem){
                $sql ='INSERT INTO content (name, content) VALUES ("'.$ContentItem[0].'","'.$ContentItem[1].'");';
                $pdoStatement = $PDO->prepare($sql);
                $pdoStatement -> execute();
                echo $sql;
            }          
        }
        
        function initialisation($NameDB,$UserDB,$passwordDB,$name,$surname,$email,$password,$fillDB){
            echo '<body>
                <h2 >Creation de la base de donnée</h2> 
                <div class="carte" style="margin: 5% 20% 0% 20%;">
                <h2>Action :</h2>
                <ul>';

            try {
                $PDO = new PDO('mysql:host=localhost', $UserDB, $passwordDB); //connexion au serveur via les identifiants renseignés
            }catch(PDOExeption $e){
                echo 'Erreur lors de la connection au serveur';
            }
            
            if ($PDO->exec('DROP DATABASE IF EXISTS '.$NameDB) !== false) { //suppression de la base déjà existante
                if ($PDO -> exec('CREATE DATABASE '.$NameDB) !==null){ // création de la nouvelle base
                    echo "<li>création de la base réussi !</li> <br/>";
                    try{
                        $tablePDO = new PDO('mysql:host=localhost;dbname='.$NameDB, $UserDB, $passwordDB); //connexion à la base 
                        echo '<li>liaison à la base de donnée réussie</li><br/>';
                    }catch(PDOExeption $e){
                        echo '<li>echec de la liaison à la base de données</li><br/>';
                    }
                    // création des différentes tables
                    if($tablePDO -> exec('CREATE TABLE content (
                        id INT(11) PRIMARY KEY AUTO_INCREMENT,
                        name VARCHAR(100),
                        content TEXT(1000))') !== null){
                            echo "<li>table Content créée</li><br/>";
                    }else{
                            echo '<li>echec de création de la table Content</li><br/>';
                    }
                }else{
                    echo '<li>echec de la création de la base de donnée</li><br/>';
                }
            }else{
                echo '<li>erreur de suppression de la table</li><br/>';
            }
        
            if($fillDB){
                fillDB($NameDB,$UserDB,$passwordDB,$name,$surname,$email,$password);
            }
            
            echo ' </ul>';
            if(isset($_POST["action"])==0){
                echo'
                    <form action="" method=POST>
                        <input name="action" value="fillBdd" style="display:none">
                        <button type=submit class="boutton">Remplir la base de donnée</button>
                    </form>';
            }
            
        

            echo '
            <a class="boutton" href="'.substr($_SERVER["HTTP_REFERER"], 0, -7).'/"> Menu </a>
            </div>
            </body>';
        }
        
    ?>
    
    <h1 style="background-color:black">Initialisation</h1>
    <?php 
    printForm();
    // var_dump($_POST);

    if(isset($_POST["action"])){

        if(file_exists("models/connect.csv")){
            unlink('models/connect.csv');
        }
        $fichier = fopen("models/connect.csv", "w");
        fwrite($fichier, "NameDB,UserDB,passwordDB,name,surname,email,password,base_url \r\n");
        fwrite($fichier,$_POST["NameDB"].",".$_POST["UserDB"].",".$_POST["passwordDB"].",".$_POST["name"].",".$_POST["surname"].",".$_POST["email"].",".$_POST["password"].",".$_POST["base_url"] );
        
        initialisation($_POST["NameDB"],$_POST["UserDB"],$_POST["passwordDB"],$_POST["name"],$_POST["surname"],$_POST["email"],$_POST["password"],1);
        
    }


  






