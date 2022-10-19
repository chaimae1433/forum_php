<?php 

 require('../controleur/users/securityAction.php');
    require('../controleur/questions/showAllQuestionsAction.php');
    require('../model/database.php');

?>
<!DOCTYPE html>
<html lang="en">
<body >
    <style>
        body{
            background-image: url("../assets/img/hero-bg.png");
        }
        .container{
            margin-top: 70px;
        }
        .search1{
            position: fixed;
        
        }
        </style>
<?php include 'head.php'; ?>

    <?php include 'navbar.php'; ?>
    
    <button class='addQst' onclick="window.location.href='publish-question.php'"><i class="bi bi-patch-question"></i> Poser une question</button>
    
    <br><br>

    <div class="container">
    
        <form method="GET" >

            <!--<div class="form-group row" style='position:absolute; top: 2% ;left:39%'>-->
            <div class="form-group row" style='position:absolute; top: 10% ;left:39%'>
           
                <div class="input-group search-box" >
                    <input type="search" name="search" class="form-control" placeholder="chercher une question..."  >
                    <span class="input-group-append">
                <button class="btn btn-outline-secondary bg-white border-start-0 border rounded-pill ms-n3" type="submit">
                    <i class="fa fa-search"></i>
                </button>
                </span>
                
                
                </div>
            </div>
          
        </form>
        <br>

        <?php 
            while($question = $getAllQuestions->fetch()){
               
                $id = $question['id'];
                $sql= 'SELECT COUNT(answers.id) FROM answers where answers.id_question = :id';
                $sth = $bdd->prepare($sql);
                $sth->bindParam( ':id', $id, PDO::PARAM_INT);
                $sth->execute(); 
                $nbr_rep = $sth->fetchColumn();
                ?>
                <div class="card" style="width: 70rem;">
                    <div class="card-header" style="color:#BBBB00 ;font-size: 20px;" >
                        
                           <strong> <?= $question['titre']; ?> </strong>
                       
                    </div>
                    <div class="card-body">
                      <div class="card-text">
                      <?= $question['contenu']; ?>
                      <br><br>
                      <button class='answers'  onclick="window.location.href='article.php?id=<?= $question['id']; ?>'">
                       <strong><i class="bi bi-chat-right-text"></i> <?= $nbr_rep; ?> Reponses</strong>
                      </button> 
                      
                      </div>
                      <br>
                      <small>
                      Published by <a href="profile.php?id=<?= $question['id_auteur']; ?>"><?= $question['pseudo_auteur']; ?></a> On <?= $question['date_publication']; ?>
                      </small> 
                      
                      
                    </div>
                </div>
                <br>
                <?php
            }
        ?>

    </div>


</body>

</html>