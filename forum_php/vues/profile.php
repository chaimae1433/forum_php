<?php 
$_SESSION['auth'] = true;
require('../controleur/users/securityAction.php');
    require('../controleur/users/showOneUsersProfileAction.php');   

?>
<!DOCTYPE html>
<html lang="en">
<?php include   'head.php';  ?>
<body>
<?php include 'navbar.php'; ?>
    <style>
    body {
    color: #797979;
    background-image: url("../assets/img/hero-bg.png");
    font-family: 'Open Sans', sans-serif;
    padding: 0px !important;
    margin: 0px !important;
    font-size: 13px;
    text-rendering: optimizeLegibility;
    -webkit-font-smoothing: antialiased;
    -moz-font-smoothing: antialiased;
}

.profile-nav, .profile-info{
    margin-top:100px;   
}

.profile-nav .user-heading {
    background: #031888;
    color: #f1f2f7;
    border-radius: 4px 4px 0 0;
    -webkit-border-radius: 4px 4px 0 0;
    padding: 30px;
    text-align: center;
}

.profile-nav .user-heading.round a  {
    border-radius: 50%;
    -webkit-border-radius: 50%;
    border: 10px solid #797979;
    display: inline-block;
}

.profile-nav .user-heading a img {
    width: 112px;
    height: 112px;
    border-radius: 50%;
    -webkit-border-radius: 50%;
}

.profile-nav .user-heading h1 {
    font-size: 22px;
    font-weight: 300;
    margin-bottom: 5px;
}

.profile-nav .user-heading p {
    font-size: 12px;
}

.profile-nav ul {
    margin-top: 1px;
}

.profile-nav ul > li {
    border-bottom: 1px solid #031888;
    margin-top: 0;
    line-height: 30px;
}

.profile-nav ul > li:last-child {
    border-bottom: none;
}
.profile-nav col-md-3{
    color:#031888;
}

.profile-nav ul > li > a {
    border-radius: 0;
    -webkit-border-radius: 0;
    color: #240E8B;
    border-left: 5px solid #fff;
}

.profile-nav ul > li > a:hover, .profile-nav ul > li > a:focus, .profile-nav ul li.active  a {
    background: #f8f7f5 !important;
    border-left: 5px solid #fbc02d;
    color: #89817f !important;
}

.profile-nav ul > li:last-child > a:last-child {
    border-radius: 0 0 4px 4px;
    -webkit-border-radius: 0 0 4px 4px;
}

.profile-nav ul > li > a > i{
    font-size: 16px;
    padding-right: 10px;
    color: #bcb3aa;
}

.r-activity {
    margin: 6px 0 0;
    font-size: 12px;
}


.p-text-area, .p-text-area:focus {
    border: none;
    font-weight: 300;
    box-shadow: none;
    color: #c3c3c3;
    font-size: 16px;
}

.profile-info .panel-footer {
    background-color:#f8f7f5 ;
    border-top: 1px solid #e7ebee;
}

.profile-info .panel-footer ul li a {
    color: #7a7a7a;
}

.bio-graph-heading {
    background: #fbc02d;
    color: #fff;
    text-align: center;
    font-style: italic;
    padding: 40px 110px;
    border-radius: 4px 4px 0 0;
    -webkit-border-radius: 4px 4px 0 0;
    font-size: 16px;
    font-weight: 300;
}

.bio-graph-info {
    color: #89817e;
}

.bio-graph-info h1 {
    font-size: 22px;
    font-weight: 300;
    margin: 0 0 20px;
}

.bio-row {
    width: 50%;
    float: left;
    margin-bottom: 10px;
    padding:0 15px;
}

.bio-row p span {
    width: 100px;
    display: inline-block;
}

.bio-chart, .bio-desk {
    float: left;
}

.bio-chart {
    width: 40%;
}

.bio-desk {
    width: 60%;
}

.bio-desk h4 {
    font-size: 15px;
    font-weight:400;
}

.bio-desk h4.terques {
    color: #4CC5CD;
}

.bio-desk h4.red {
    color: #e26b7f;
}

.bio-desk h4.green {
    color: #97be4b;
}

.bio-desk h4.purple {
    color: #031888;
}

.file-pos {
    margin: 6px 0 10px 0;
}

.profile-activity h5 {
    font-weight: 300;
    margin-top: 0;
    color: #c3c3c3;
}

.summary-head {
    background: #ee7272;
    color: #fff;
    text-align: center;
    border-bottom: 1px solid #ee7272;
}

.summary-head h4 {
    font-weight: 300;
    text-transform: uppercase;
    margin-bottom: 5px;
}

.summary-head p {
    color: rgba(255,255,255,0.6);
}

ul.summary-list {
    display: inline-block;
    padding-left:0 ;
    width: 100%;
    margin-bottom: 0;
}

ul.summary-list > li {
    display: inline-block;
    width: 19.5%;
    text-align: center;
}

ul.summary-list > li > a > i {
    display:block;
    font-size: 18px;
    padding-bottom: 5px;
}

ul.summary-list > li > a {
    padding: 10px 0;
    display: inline-block;
    color: #818181;
}

ul.summary-list > li  {
    border-right: 1px solid #eaeaea;
}

ul.summary-list > li:last-child  {
    border-right: none;
}

.activity {
    width: 100%;
    float: left;
    margin-bottom: 10px;
}

.activity.alt {
    width: 100%;
    float: right;
    margin-bottom: 10px;
}

.activity span {
    float: left;
}

.activity.alt span {
    float: right;
}
.activity span, .activity.alt span {
    width: 45px;
    height: 45px;
    line-height: 45px;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    background: #eee;
    text-align: center;
    color: #031888;
    font-size: 16px;
}

.activity.terques span {
    background: #031888;
}

.activity.terques h4 {
    color: #031888;
}
.activity.purple span {
    background: #031888;
}

.activity.purple h4 {
    color:#031888;
}
.activity.blue span {
    background: #031888;
}

.activity.blue h4 {
    color: #031888;
}
.activity.green span {
    background: #031888;
}

.activity.green h4 {
    color: #031888;
}

.activity h4 {
    margin-top:0 ;
    font-size: 16px;
}

.activity p {
    margin-bottom: 0;
    font-size: 13px;
}

.activity .activity-desk i, .activity.alt .activity-desk i {
    float: left;
    font-size: 18px;
    margin-right: 10px;
    color: #bebebe;
}

.activity .activity-desk {
    margin-left: 70px;
    position: relative;
}

.activity.alt .activity-desk {
    margin-right: 70px;
    position: relative;
}

.activity.alt .activity-desk .panel {
    float: right;
    position: relative;
}

.activity-desk .panel {
    background: #031888 ;
    display: inline-block;
}


.activity .activity-desk .arrow {
    border-right: 8px solid #031888 !important;
}
.activity .activity-desk .arrow {
    border-bottom: 8px solid transparent;
    border-top: 8px solid transparent;
    display: block;
    height: 0;
    left: -7px;
    position: absolute;
    top: 13px;
    width: 0;
}

.activity-desk .arrow-alt {
    border-left: 8px solid #031888 !important;
}

.activity-desk .arrow-alt {
    border-bottom: 8px solid transparent;
    border-top: 8px solid transparent;
    display: block;
    height: 0;
    right: -7px;
    position: absolute;
    top: 13px;
    width: 0;
}

.activity-desk .album {
    display: inline-block;
    margin-top: 10px;
}

.activity-desk .album a{
    margin-right: 10px;
}

.activity-desk .album a:last-child{
    margin-right: 0px;
}</style>
<?php 
            if(isset($errorMsg)){ echo $errorMsg; }?>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container bootstrap snippets bootdey">
<div class="row">
  <div class="profile-nav col-md-3">
      <div class="panel">
          <div class="user-heading round">
              <a href="#">
       <!-- <input type="file" name="file">
        <button type="submit"></button>-->
                <img src="user.png" alt="">
              </a>
              <h1><?= $user_pseudo; ?></h1>
              <p><?= $email; ?></p>
              <p></p>
              <form class="container" method="POST">
          </div>
          
          <ul class="nav nav-pills nav-stacked">
              <li class="active"><a href="#"> <i class="fa fa-user"></i> Profile</a></li>
              
           <!--  <li><a href="editprofile.php"> <i class="fa fa-edit"></i> Edit profile</a></li>-->
          </ul>
      </div>
</form>
  </div>
  <div class="profile-info col-md-9">
      <div class="panel">
      <img >
          <form>
          
              <textarea placeholder="pour former des bons ingénieurs ,ENSA Tanger a mis en place cette plateforme pour ses étudiants" rows="2" class="form-control input-lg p-text-area"></textarea>
          </form>
          <footer class="panel-footer">
              
              
          </footer>
      </div>
      <br>
      <br>
      <div class="panel">
          
          <div class="panel-body bio-graph-info">
              <h1>Bio Graph</h1>
              <div class="row">
                  <div class="bio-row">
                      <p><span style="property:value;">prenom </span>: <?= $user_firstname   ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>nom </span>:<?= $user_lastname  ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>pay </span>:<?= $pay; ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>ville </span>:<?= $ville; ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>datte de naissance</span>:<?= $date_naissance; ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>filiere </span> :<?= $fl; ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Email </span>: <?= $email; ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>compte linkedIn
                           </span>:<?= $cl; ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>numero de telephone </span>: <?= $phone; ?> </p>
                  </div>
                  <div class="bio-row">
                      <p><span>profession </span>: <?= $prf; ?> </p>
                  </div>
                  <div class="bio-row">
                      <p><span>plus d'informations sur moi </span>:<?= $desc; ?> </p>
                  </div>
              </div>
          </div>
      </div>
      <div>
          <div class="row">
              <div class="col-md-6">
                  <div class="panel">
                      <div class="panel-body">
                          <div class="bio-chart">
                              
                          
                      </div>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="panel">
                      <div class="panel-body">
                          
                         
                      </div>
                  </div>
              </div>
              
            
          </div>
      </div>
  </div>
</div>
</div>
</html>