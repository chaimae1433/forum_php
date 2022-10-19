<?php

require('../model/database.php');
//if(isset($ds['id']) AND !empty($_GET['id'])){
if(isset($_GET['id']) AND !empty($_GET['id'])){

    //L'id de l'utilisateur
    $idOfUser = $_GET['id'];

    //Vérifier si l'utilisateur existe
    $checkIfUserExists = $bdd->prepare('SELECT * FROM users WHERE id = ?');
    $checkIfUserExists->execute(array($idOfUser));

    if($checkIfUserExists->rowCount() > 0){
        
        //Récupérer toutes les données de l'utilisateur
        $usersInfos = $checkIfUserExists->fetch();

        $user_pseudo = $usersInfos['pseudo'];
        $user_lastname = $usersInfos['nom'];
        $user_firstname = $usersInfos['prenom'];
        $cl=$usersInfos['compte_linkedlen'];
        $phone =$usersInfos['num_tel'];
        $desc=$usersInfos['description'];
        $email=$usersInfos['email'];
        $date_naissance=$usersInfos['date_naissance'];
        $fl=$usersInfos['filiere'];
        $prf=$usersInfos['profession'];
        $pay=$usersInfos['pays'];
        $ville=$usersInfos['ville'];

    }else{
        $errorMsg = "count=0";
    }

}else{
    $errorMsg = "id empty";
}