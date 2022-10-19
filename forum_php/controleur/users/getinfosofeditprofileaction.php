<?php

require('../model/database.php');

//Vérifier si l'id de la question est bien passé en paramètre dans l'URL
if(isset($_GET['id']) AND !empty($_GET['id'])){
    //Récupérer l'identifiant de l'utilisateur
    if(isset($_GET['id']) AND !empty($_GET['id'])){
    
        //L'id de l'utilisateur
        $idOfUser = $_GET['id'];
    
        $checkIfUserExists = $bdd->prepare('SELECT * FROM users WHERE id = ?');
        $checkIfUserExists->execute(array($_SESSION['id']));
        if($checkIfUserExists->rowCount() > 0){
            
            //Récupérer toutes les données de l'utilisateur
          //  $usersInfos = $checkIfUserExists->fetch();
          //  $_SESSION['nom']=$usersInfos['nom'];
          //  $_SESSION['lastname'] = $usersInfos['nom'];
               // $_SESSION['firstname'] = $usersInfos['prenom'];
               // $_SESSION['email'] = $usersInfos['email'];
              //  $_SESSION['cl'] = $usersInfos['compte_linkdlen'];
               // $_SESSION['num-tel'] = $usersInfos['num_tel'];
              //  $_SESSION['desc'] = $usersInfos['description'];
               // $_SESSION['daten'] =$usersInfos['date_naissance'];
            
           
    
        }else{
            $errorMsg = "count=0";
        }
    
    }else{
        $errorMsg = "getid empty";
    }
}

