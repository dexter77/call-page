<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["nom"]; 
    $lastname = $_POST["prenom"]; 
    $email = $_POST["email"];
  
    if (!isset($name)){
        die("S'il vous plaît entrez votre nom");
      }
      if (!isset($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
        die("S'il vous plaît entrez votre adresse e-mail");
      }
        if (!isset($lastname)){
            die("S'il vous plaît entrez votre prénom");
        }
        print "Salut " . $lastname . "!, votre adresse e-mail est ". $email;
    }

        //Ouvrir une nouvelle connexion au serveur MySQL
        $mysqli = new mysqli($81.88.53.15, $go4vwtd7_test1, $testtest1, $go4vwtd7_test);
    
        //Afficher toute erreur de connexion
        if ($mysqli->connect_error) {
          die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
        }  
        
        //préparer la requête d'insertion SQL
        $statement = $mysqli->prepare("INSERT INTO users (nom, prenom, email) VALUES(?, ?, ?)"); 
        //Associer les valeurs et exécuter la requête d'insertion
        $statement->bind_param('ss', $nom, $prenom, $email); 
        
        if($statement->execute()){
          print "Salut " . $nom . "!, votre adresse e-mail est ". $email;
        }else{
          print $mysqli->error; 
        }
?>