<?php require('../controleur/users/loginAction.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>

<body>
<section class="vh-100" style="background-color: #393f81;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img
                src="../assets/img/features-3.png"
                alt="login form"
                class="img-fluid" style="border-radius: 1rem 0 0 1rem;"
              />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

              <form class="container" method="POST">
              <br>
              <br>
              <br>
              <?php if(isset($errorMsg)){ echo '<p>'.$errorMsg.'</p>'; } ?>

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span  class="navbar-brand"><i class="fa fa-cube"></i>Forum<b>ENSAT</b> </span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                  <div class="form-outline mb-4">
                    <input type="text" id="form2Example17" class="form-control form-control-lg" name="pseudo" placeholder="pseudo" />
                    
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="form2Example27" class="form-control form-control-lg" name="password" placeholder="password" />
                    
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type="submit" name="validate">Login</button>
                  </div>

                
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>