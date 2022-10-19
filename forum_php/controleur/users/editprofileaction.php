<?php

require('../model/database.php');
require('getinfosofeditprofileaction.php');
$checkIfUserExists = $bdd->prepare('SELECT * FROM users WHERE id = ?');
$checkIfUserExists->execute(array($_SESSION['id']));
if($checkIfUserExists->rowCount() > 0){
    
    //Récupérer toutes les données de l'utilisateur
    $usersInfos = $checkIfUserExists->fetch();
    $_SESSION['nom']=$usersInfos['nom'];
    $_SESSION['lastname'] = $usersInfos['nom'];
        $_SESSION['firstname'] = $usersInfos['prenom'];
        $_SESSION['email'] = $usersInfos['email'];
        $_SESSION['cl'] = $usersInfos['compte_linkedlen'];
        $_SESSION['num'] = $usersInfos['num_tel'];
        $_SESSION['desc'] = $usersInfos['description'];
        $_SESSION['daten'] =$usersInfos['date_naissance'];
        $_SESSION['prf']=$usersInfos['profession'];
        $_SESSION['ville']=$usersInfos['ville'];
        $_SESSION['pay']=$usersInfos['pays'];
        $_SESSION['fl']=$usersInfos['filiere'];
    
   

}else{
    $errorMsg = "count=0";
}
//Validation du formulaire
if(isset($_POST['modification'])){

    //Vérifier si les champs sont remplis
    if(!empty($_POST['first_name']) AND !empty($_POST['last_name']) ){
       
            $idOfUser=$_SESSION['id'];
            $_SESSION['auth'] = true;
        $new_nome= htmlspecialchars($_POST['last_name']);
        $newprenom =htmlspecialchars($_POST['first_name']);
        $newemail=htmlspecialchars($_POST['email']);
        $description=htmlspecialchars($_POST['additional']);
        $cmpte_lenkdlen=htmlspecialchars($_POST['linkedlen']);
        $date_naissance=htmlspecialchars($_POST['daten']);
        $numtele=htmlspecialchars($_POST['phone']);
        $prf=htmlspecialchars($_POST['profession']);
        $pay=htmlspecialchars($_POST['pays']);
        $ville=htmlspecialchars($_POST['ville']);
        $fl=htmlspecialchars($_POST['fl']);
        $_SESSION['nom']=htmlspecialchars($_POST['last_name']);
        $_SESSION['lastname'] = htmlspecialchars($_POST['last_name']);
        $_SESSION['firstname'] = htmlspecialchars($_POST['first_name']);
        $_SESSION['email'] = htmlspecialchars($_POST['email']);
        $_SESSION['cl'] = htmlspecialchars($_POST['linkedlen']);
        $_SESSION['num'] = htmlspecialchars($_POST['phone']);
        $_SESSION['desc'] = htmlspecialchars($_POST['additional']);
        $_SESSION['daten'] = htmlspecialchars($_POST['daten']);
        $_SESSION['prf']=htmlspecialchars($_POST['profession']);
        $_SESSION['ville']=htmlspecialchars($_POST['ville']);
        $_SESSION['pay']=htmlspecialchars($_POST['pays']);
        $_SESSION['fl']=htmlspecialchars($_POST['fl']);
        $_SESSION['auth'] = true;
        
        //Modifier les informations de la question qui possède l'id rentré en paramètre dans l'URL
        
        $edituser = $bdd->prepare('UPDATE  users SET nom = ?, prenom = ? ,email=? ,description=?, compte_linkedlen = ?,num_tel=? ,date_naissance=?,ville=?,pays=?,profession=?,filiere=? WHERE id = ?');
        $edituser->execute(array($new_nome, $newprenom,$newemail,$description,$cmpte_lenkdlen,$numtele,$date_naissance,$ville,$pay,$prf,$fl,$idOfUser));
        if(!empty($edituser)){
            $_SESSION['auth'] = true;
        //Redirection vers la page d'affichage des questions de l'utilisateur
       // header('Location:index.php');
    }

    }else{
        $errorMsg = "Veuillez compléter tous les champs...";
    }

    }