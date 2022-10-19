<?require"loginAction";
$_SESSION['auth']=true;?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	background: #eeeeee;
	background-image: url("assets/img/hero-bg.png");
	font-family: 'Varela Round', sans-serif;
}
.navbar {
	color: #fff;
	background: #010169 !important;
	padding: 5px 16px;
	border-radius: 0;
	border: none;
	box-shadow: 0 0 4px rgba(0,0,0,.1);
	
}
.navbar img {
	border-radius: 50%;
	width: 36px;
	height: 36px;
	margin-right: 10px;
}
.navbar .navbar-brand {
	color: #efe5ff;
	padding-left: 0;
	padding-right: 370px;
	font-size: 24px;		
}
.navbar .navbar-brand:hover, .navbar .navbar-brand:focus {
	color: #fff;
}
.navbar .navbar-brand i {
	font-size: 25px;
	margin-right: 5px;
}
.search-box {
	position: relative;
}	
.search-box input {
	padding-right: 35px;
	min-height: 38px;
	border: none;
	background: #faf7fd;
	border-radius: 4px !important;
}
.search-box input:focus {		
	background: #fff;
	box-shadow: none;
}
.search-box .input-group-addon {
	min-width: 35px;
	border: none;
	background: transparent;
	position: absolute;
	right: 0;
	z-index: 9;
	padding: 10px 7px;
	height: 100%;
}
.search-box i {
	color: #a0a5b1;
	font-size: 19px;
}
.navbar .nav-item i {
	font-size: 18px;
}
.navbar .nav-item span {
	position: fixed;
	top: 3px;
}
.navbar .navbar-nav > a {
	color: #efe5ff;
	padding: 8px 15px;
	font-size: 14px;		
}
.navbar .navbar-nav > a:hover, .navbar .navbar-nav > a:focus {
	color: #fff;
	text-shadow: 0 0 4px rgba(255,255,255,0.3);
}
.navbar .navbar-nav > a > i {
	display: block;
	text-align: center;
}
.navbar .dropdown-item i {
	font-size: 16px;
	min-width: 22px;
}
.navbar .dropdown-item .material-icons {
	font-size: 21px;
	line-height: 16px;
	vertical-align: middle;
	margin-top: -2px;
}
.navbar .nav-item.open > a, .navbar .nav-item.open > a:hover, .navbar .nav-item.open > a:focus {
	color: #fff;
	background: none !important;
}
.navbar .dropdown-menu {
	border-radius: 1px;
	border-color: #e5e5e5;
	box-shadow: 0 2px 8px rgba(0,0,0,.05);
}
.navbar .dropdown-menu a {
	color: #777 !important;
	padding: 8px 20px;
	line-height: normal;
	font-size: 15px;
}
.navbar .dropdown-menu a:hover, .navbar .dropdown-menu a:focus {
	color: #333 !important;
	background: transparent !important;
}
.navbar .navbar-nav .active a, .navbar .navbar-nav .active a:hover, .navbar .navbar-nav .active a:focus {
	color: #fff;
	text-shadow: 0 0 4px rgba(255,255,255,0.2);
	background: transparent !important;
}
.navbar .navbar-nav .user-action {
	padding: 9px 15px;
	font-size: 15px;
}
.navbar .navbar-toggle {
	border-color: #fff;
}
.navbar .navbar-toggle .icon-bar {
	background: #fff;
}
.navbar .navbar-toggle:focus, .navbar .navbar-toggle:hover {
	background: transparent;
}
.navbar .navbar-nav .open .dropdown-menu {
	background: #faf7fd;
	border-radius: 1px;
	border-color: #faf7fd;
	box-shadow: 0 2px 8px rgba(0,0,0,.05);
}
.navbar .divider {
	background-color: #e9ecef !important;
}
@media (min-width: 1200px){
	.form-inline .input-group {
		width: 350px;
		margin-left: 30px;
	}
}
@media (max-width: 1199px){
	.navbar .navbar-nav > a > i {
		display: inline-block;			
		text-align: left;
		
		top: 4px;
		position: fixed;
	}
	.navbar .navbar-collapse {
		border: none;
		box-shadow: none;
		padding: 0;
		position: fixed;
	}
	.navbar .navbar-form {
		border: none;			
		display: block;
		margin: 10px 0;
		padding: 0;
		position: fixed;
	}
	.navbar .navbar-nav {
		margin: 8px 0;
		position: fixed;
	}
	.navbar .navbar-toggle {
		margin-right: 0;
		position: fixed;
	}
	.input-group {
		width: 100%;
	}
	.navbar .navbar-expand-xl .navbar-dark .bg-dark{
		position: fixed;
	}
	.n{
		position: fixed;
	}
}
</style>
</head> 
<body>
<header id="header" class="header fixed-top">
	
<nav class="navbar navbar-expand-xl navbar-dark bg-dark"  >
	
	<a href="index.php" class="navbar-brand"><i class="fa fa-cube"></i>Forum<b>ENSAT</b></a>  		
	<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
		<span class="navbar-toggler-icon"></span>
	</button>
	<!-- Collection of nav links, forms, and other content for toggling -->

	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">		
		<div class="navbar-nav ml-auto">
			<!--<a href="./index.php" class="nav-item nav-link active"><i class="fa fa-home"></i>forum</a>-->
			<a href="../home.php" class="nav-item nav-link active"><i class="fa fa-home"></i>Acceuil</a>
			
			<a href="./my-Offre.php" class="nav-item nav-link"><i class="fa fa-briefcase"></i>Offres</a>	
     
			
			<div class="nav-item dropdown">
				<a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle user-action"><img src="user.png" class="avatar" alt="Avatar"> A propros de moi <b class="caret"></b></a>
				<div class="dropdown-menu">
				<?php 
					if(isset($_SESSION['auth'])){
						?>
					<a href="profile.php?id=<?= $_SESSION['id']; ?>" class="dropdown-item"><i class="fa fa-user-o"></i> Profile</a>
					<a href="editprofile.php?id=<?= $_SESSION['id']; ?>" class="dropdown-item"><i class="fa fa-edit"></i> edit Profile</a>
					<a href="my-questions.php" class="dropdown-item"><i class="bi-question-circle"></i> Mes Questions</a>
					<div class="divider dropdown-divider"></div>
					<a href="../controleur/users/logoutAction.php" class="dropdown-item"><i class="material-icons">&#xE8AC;</i> Deconnexion</a>
					<?php
					;}
					?>
				</div>
			</div>
		</div>
	</div></div>
</nav>
					</header>
</body>
</html>