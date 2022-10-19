<?php 
    session_start();
    require('../controleur/questions/showArticleContentAction.php'); 
    require('../controleur/questions/postAnswerAction.php');
    require('../controleur/questions/showAllAnswersOfQuestionAction.php');
?>
<!DOCTYPE html>
<html lang="en">
    <style>
        .card{
            margin-top: 50px;
        }
        </style>
<?php include 'head.php'; ?>
<body>
    
    <?php include 'navbar.php'; ?>
    <br><br>

    <div class="container" >


        <?php 
            if(isset($errorMsg)){ echo $errorMsg; }


            if(isset($question_publication_date)){
                ?>
                <section class="card" style="width: 75rem;  right:5%;" >
                <div class="card-header" style="color:#BBBB00 ;font-size: 20px;  text-align:center;" >
                        
                           <strong><?= $question_title; ?> </strong>
                       
                    </div>
                    <div class="card-body">
                    <p class="card-text"><?= $question_content; ?>
                    <br>
                    </p>
                    <small >By <?= '<a href="profile.php?id='.$question_id_author.'">'.$question_pseudo_author . '</a> On ' . $question_publication_date; ?></small>
                    </div>
                </section>
                <br>
                <section class="show-answers">

                   

                    <?php 
                        while($answer = $getAllAnswersOfThisQuestion->fetch()){
                            ?>
                            <div class="card" style="width: 73rem;  right:3%;">
                                <div class="card-body"  >
                              <strong><a href="profile.php?id=<?= $answer['id_auteur']; ?>"><?= $answer['pseudo_auteur']; ?></a> </strong> . <small>  <?= $answer['date_publication']; ?></small>
                                <br><br>
                                    <p><?= $answer['contenu']; ?></p>

                                    
                                </div>  
                            </div>
                            <br>
                            <?php
                        }
                    ?>

                   <form class="form-group" method="POST">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Reply :</label>
                            <textarea name="answer" class="form-control"></textarea>
                            <br>
                            <button class="btn btn-primary" type="submit" name="validate" style='background-color:#BBBB00;border:none;box-shadow: 0 6px 11px 0 rgba(0,0,0,0.1), 0 1px 5px 0 rgba(0,0,0,0.19)'>Reply</button>
                        </div>
                    </form>

                </section>
                
                <?php
            }
        ?>

    </div>

</body>
</html>