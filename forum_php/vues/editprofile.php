<?php
    require('../controleur/users/securityAction.php');
    require('../controleur/users/getinfosofeditprofileaction.php');
    require('../controleur/users/editprofileaction.php');
?>
<!DOCTYPE html>
<?php include 'head.php'; ?>
<html>
<style>
body {
	
   overflow-y: hidden; 
   background-image: url("../assets/img/hero-bg.png");
}
.form-v10{

	background-color: whitesmoke;
}

</style>
<head>
	<meta charset="utf-8">
	<title>Form-v10 by Colorlib</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="../css/montserrat-font.css">
	<link rel="stylesheet" type="text/css" href="../fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="../css/style.css"/>
    
</head>
<?php include 'navbar.php'; ?>
<body class="form-v10">
    

	<div class="page-content">
		<div class="form-v10-content">
			<form class="form-detail"   method="post" id="myform">
           
				<div class="form-left">
					<h2>General Infomation</h2>
					<div class="form-row">
						
					</div>
                    
					<div class="form-group">
						<div class="form-row form-row-1">
							
							<input type="text" name="first_name" id="first_name" class="input-text" value="<?=$_SESSION['firstname'] ?>" <?php if(empty($_SESSION['lastname'])) {?> placeholder="nom" <?php ;} ?>>
							
						</div>
						<div class="form-row form-row-2">
							<input type="text" name="last_name" id="last_name" class="input-text" value="<?=$_SESSION['lastname']?>" <?php if(empty($_SESSION['lastname'])) {?> placeholder="prenom" <?php ;} ?> >
						</div>
					</div>
					<div class="form-row">
                    <input type="text" name="profession" class="company" id="company"  value="<?=$_SESSION['prf']?>" <?php if(empty($_SESSION['prf'])) {?> placeholder="profession" <?php ;} ?> >
					</div>
					<div class="form-row">
						<input type="text" name="fl" class="company" id="company" value="<?=$_SESSION['fl']?>" <?php if(empty($_SESSION['fl'])) {?> placeholder="filiere" <?php ;} ?> >
					</div>
					
					<div class="form-group">
						<div class="form-row form-row-3">
							<input type="text" name="pays" class="business" id="business" value="<?=$_SESSION['pay']?>" <?php if(empty($_SESSION['pay'])) {?> placeholder="pay" <?php ;} ?> >
						</div>
						<div class="form-row">
						<input type="text" name="ville" class="company" id="company" value="<?=$_SESSION['ville']?>" <?php if(empty($_SESSION['ville'])) {?> placeholder="ville" <?php ;} ?> >
					</div>
					</div>
				</div>
				<div class="form-right">
					<h2>Contact Details</h2>
					<div class="form-row">
						<input type="date" name="daten" class="street" id="street"  value="<?=$_SESSION['daten']?>" <?php if(empty($_SESSION['daten'])) {?> placeholder="date de naissance" <?php ;} ?> >
					</div>
					<div class="form-row">
						<input type="text" name="additional" class="additional" id="additional" value="<?=$_SESSION['desc']?>" <?php if(empty($_SESSION['desc'])) {?> placeholder="additional information" <?php ;} ?>  >
					</div>
					<div class="form-row">
					
							<input type="text" name="linkedlen" class="additional" id="additional" value="<?=$_SESSION['cl']?>" <?php if(empty($_SESSION['cl'])) {?> placeholder="compte linkdIn" <?php ;} ?> >
						
					
					</div>
					<div class="form-row">
						
						<span class="select-btn">
						  
						</span>
					</div>
					<div class="form-group">
						
						<div class="form-row">
							<input type="text" name="phone" class="phone" id="phone" required pattern="[0-9]{10}" value="<?=$_SESSION['num'] ?>" <?php if(empty($_SESSION['num'] )) {?> placeholder="Numero de telephone" <?php ;} ?> >
						</div>
					</div>
					<div class="form-row">
						<input type="text" name="email" id="your_email" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" value="<?=$_SESSION['email']?>" <?php if(empty($_SESSION['email'])) {?> placeholder="Email" <?php ;} ?>>
					</div>
					<div class="form-checkbox">
						
					</div>
					<div class="form-row-last">
						<input type="submit" name="modification" class="register" value="modifier">
					</div>
				</div>
                </form>
			</form>
		</div>
	</div>
</body>
</html>