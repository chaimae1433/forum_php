<!DOCTYPE html>
<?php

require('../controleur/questions/showAllOffresAction.php');
require('../controleur/users/securityAction.php'); 
require('../controleur/questions/publishOffreAction.php');
?>

<html>
<?php include 'head.php'; ?>
<style>
span{
	color: #BBBB00;
}
.p-text-area, .p-text-area:focus {
    border: none;
    font-weight: 300;
    box-shadow: none;
    color: #c3c3c3;
    font-size: 16px;
}
.hero{
	margin-top: 70px;
}
</style>
<head>
	<title>Portfolio website</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<?php include 'navbar.php'; ?>
	<!----hero Section start---->

	<div class="hero">
		<nav>
		<!--	<h2 class="logo">Offre<span>Stage</span></h2>-->
			<h1>         


</h1>
			<!-- <h1><span>Ahmed</span></h1> -->
			<!-- <h3>I'am a Web Developer.</h3> -->
			<div class="newslatter">
			<form class="container" method="POST">

<?php 
	if(isset($errorMsg)){ 
		echo '<p>'.$errorMsg.'</p>'; 
	}elseif(isset($successMsg)){ 
		echo '<p>'.$successMsg.'</p>'; 
	}
?>

<div class="mb-3">
	<h1>

	
</h1>
<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

	<label for="exampleInputEmail1" class="form-label" placeholder="offre d'emploi ou de stage?!"></label>
	<input type="text" class="form-control" name="title" placeholder="offre d'emploi ou de stage?!"/>
</div>
<div class="mb-3">
	<label for="exampleInputEmail1" class="form-label" placeholder="description"></label>
	<textarea class="form-control" name="description" placeholder="Description du l'Offre"  class="form-control input-lg p-text-area"></textarea>
</div>
<div class="mb-3">
	<label for="exampleInputEmail1" class="form-label"></label>
	<textarea type="text" class="form-control" name="ville" placeholder="Ville du l'Offre"></textarea>
</div>
<style>
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
<button type="submit" class="btn" name="validate">Publier l'offre </button>

</form>

<ul>
			
				<li>
                    
               
			
			</ul>
				
				<!-- <form method="POST">
					<input type="Text" name="title" id="Text" >
					
					<h1>

					</h1>
					
				</form>
                <form method="POST">
				<input type="Text" name="description" id="Text" >
				<h1>

					</h1>
					
                </form>
				<form method="POST">
				<input type="Text" name="ville" id="Text" >
				<h1>

					</h1>
					
				<button type="button" name="Poster">Poster</button>
                </form> -->
			</div>
		</div>
	</div>

	<!----About section start---->
    

	<!------footer start--------->
	
</body>
</html>