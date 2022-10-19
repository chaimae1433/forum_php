<?php

require('../model/database.php');

//Valider le formulaire
if(isset($_POST['validate'])){

    //Vérifier si les champs ne sont pas vides
    if(!empty($_POST['title'])AND !empty($_POST['description']) AND !empty($_POST['ville'])){
        
        //Les données de la question
        $question_title = htmlspecialchars($_POST['title']);
        $question_description = nl2br(htmlspecialchars($_POST['description']));
        $question_content = nl2br(htmlspecialchars($_POST['ville']));
       
        $question_id_author = $_SESSION['id'];
        $question_pseudo_author = $_SESSION['pseudo'];

        //Insérer la question sur la question
        $insertQuestionOnWebsite = $bdd->prepare('INSERT INTO offree(title, description, ville,id_auteur)VALUES(?, ?, ?,?)');
        $insertQuestionOnWebsite->execute(
            array(
                $question_title, 
                $question_description, 
                $question_content,
                $question_id_author
                //$question_pseudo_author, 
             
            )
        );
        
    //     $successMsg = "Votre offre a bien été publiée sur le site";
        
    // }else{
    //     $errorMsg = "Veuillez compléter tous les champs...";
    // }

    }
}