<?php
echo "Soylo!";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#FFFFFF">
  <title>DILG RO IX | Dashboard</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <link rel="manifest" href="manifest.json">
  <link rel="stylesheet" href="sweetalert2.min.css">

</head>
<body>
<style>
  body{
    background: url("https://cdn.wallpapersafari.com/52/67/KL1bW5.jpg") no-repeat center center fixed;
    background-size: cover;
  }
  .glass{
    background: rgba( 255, 255, 255, 0.3 );
    box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
    backdrop-filter: blur( 2.5px );
    -webkit-backdrop-filter: blur( 2.5px );
    border-radius: 10px;
    border: 1px solid rgba( 255, 255, 255, 0.18 );
  }
</style>

<div class="container" style="margin-top: 100px !important;">
  <section>
    <div class="modal-dialog">
      <div class="main-section m-0 p-0">
        <div class="modal-content px-3 shadow-sm glass">
          <div class="col-12 text-center" style="margin-top: -50px !important;">
          <a href="index.php">
            <img src="https://upload.wikimedia.org/wikipedia/commons/c/c9/Department_of_the_Interior_and_Local_Government_%28DILG%29_Seal_-_Logo.svg" class="img-fluid img-thumbnail  rounded-circle" alt height="100px" width="100px">
          </a>
          </div>
          <div class=" text-center col-12">
            <h1 class="font-weight-bold mb-5">Sign in</h1>
          </div>
          <form method="POST" class="needs-validation" novalidate>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fas fa-user fa-fw"></i>
                  </span>
                </div>
                <input type="text" class="form-control" name="user" aria-describedby="inputGroupPrepend" placeholder="Username" required>
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fas fa-lock fa-fw"></i>
                  </span>
                </div>
                <input type="password" class="form-control" name="pass" aria-describedby="inputGroupPrepend" placeholder="Password" required>
              </div>
            </div>
            <div class="row">
              <div class="col-6 text-left">
                <div class="form-group field-userlogin-rememberme">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" id="rememberme" class="form-check-input" name="rememberme" value="">
                    <label for="custom-control-label" for="rememberme">Remember Me</label>
                  </div>
                </div>
              </div>
              <div class="col-6 text-right">
                <a href="index.php">Forgot Password?</a>
              </div>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary w-100">Login</button>
            </div>
            <div class="text-center mb-3">
              
              <p class="m-0"> <?php include('conn.php'); echo $error;?> Don't have an account? <a href="register.php"> Register</a>.</p>
            </div>
          </form>

        </div>
      </div>
    </div>
  </section>

</div>

<script src="build/js/custom/FormValidation.js"></script>
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="plugins/jquery-validation/additional-methods.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>
<script src="build/js/custom/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>

</body>
</html>
