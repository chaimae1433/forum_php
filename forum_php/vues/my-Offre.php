<?php 
    require('../controleur/users/securityAction.php');
    require('../controleur/questions/myOffreAction.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>
<?php include 'navbar.php'; ?>
<body>

    <br><br><br><br>
    <div class="container">
    <a href="index1.php" class="btn">Ajouter Offre</a>
    <h1>  







</h1>
<style>
    span{
	color: #BBBB00;
}
    </style>
        <?php 

            while($offre = $getAllMyQuestions->fetch()){
                ?>
                  <div class="card">
                    <h5 class="card-header">
                       <!-- <a href="article.php?id=<?= $offre['id_offre']; ?>">-->
                          <span><?= $offre['title']; ?>  
                             <?= $offre['ville']; ?></span>
               
                        
                    </h5>
                    <div class="card-body">
                        <p class="card-text">
                            <?= $offre['description']; ?>
                        </p>
                       
                    </div>
                </div>
                <br>
                <?php
            }

        ?>

    </div>
    <style>
        
        
button{
	background-color:#0074f9;
	color: white;
	text-decoration: none;
	border: 2px solid transparent;
	font-weight: bold;
	padding: 13px 30px;
	border-radius: 30px;
	transition: .4s; 
}

.btn{
	background-color:#BBBB00;
	color: white;
	text-decoration: none;
	border: 2px solid transparent;
	font-weight: bold;
	padding: 10px 25px;
	border-radius: 30px;
	transition: transform .4s; 
}
</style>
<style>
card{
	height: 365px;
	width: 335px;
	padding: 20px 35px;
	
	border-radius: 20px;
	margin: 15px;
	position: relative;
	overflow: hidden;
	text-align: center;
    background: transparent !important;

}

</style>
    
</body>
        
</html>