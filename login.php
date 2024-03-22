<?php session_start();
include 'db.php';
if(isset($_REQUEST['submit'])){
  extract($_POST);
  $q="select * from users where password='$password' and mobile_no=$mobile_no";
  $result = mysqli_query($conn,$q);
  if($result){
      $user=mysqli_fetch_array($result);
      $_SESSION['user']=$user;
      echo "<script> window.location='index.php';</script>";
  }
  else{
      $msg="Password or mobile number is wrong please try again!!!";
      echo "<script>alert('$msg');</script>";
  }
}

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="./assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="./assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-5 col-lg-4 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <h1 class="text-center">Login</h1>
                <p>
                <?php  
                      if(isset($msg)){
                        echo "<p class='text-danger'>'$msg'</p>";
                      }
                ?>
                </p>               
                <form action="" method='post'>
                  <div class="mb-3">
                    <label for="mobile_no" class="form-label">Username</label>
                    <input type="text" name="mobile_no" class="form-control">
                  </div>
                  <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password"  name="password" class="form-control">
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-4">                    
                    <a class="text-primary fw-bold" href="./index.html">Forgot Password ?</a>
                  </div>
                  <button name="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign In</button>
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">New to Chats?</p>
                    <a class="text-primary fw-bold ms-2" href="">Create an account</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="./assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>