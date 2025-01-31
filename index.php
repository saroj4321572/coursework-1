

<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link type="text/css" href='css/style.css' rel='stylesheet' />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  </link>
</head>

<body>
<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
  <div class="container">
    
      <a class="navbar-brand" href="index.php">Employee Management System</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-lg-0">
          <li class="nav-item active">
            <a class="nav-link " href="index.php">Login</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="register.php">Register</a>
          </li>
        </ul>
      </div>

  </div>
</nav>

  <section class="Form my-4 mx-5">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-md-5 px-0">
          <img src="images/pexels-evie-shaffer-8361170.jpg" class="img-fluid">
        </div>


        <div class="col-md-7 px-5 pt-5">
          <h4>Sign into your account</h4>
          <?php
            if (isset($_SESSION['error_message'])) {
                echo '<div class="alert alert-danger alert-dismissible fade show col-lg-7" role="alert">' . $_SESSION['error_message'] . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button></div>';
                unset($_SESSION['error_message']);
            }
          ?>

          <form action="action.php" name="form" method="post" class="loginform" onsubmit="return validated()">
          <div class="form-row" id = "form_username">
              <div class="col-lg-7">
                <input type="text" class="form-control my-0 p-2" placeholder="Username/Email" id="username" name="us">
                <i id ="icon_1" class="error-icon fas fa-exclamation-circle"></i>
              </div>
              <div id="usr_error">Username can't be blank</div>              
            </div>
            
            <div class="form-row" id="form_password">
              <div class="col-lg-7">
                <input type="password" class="form-control my-0 mt-3 p-2" placeholder="******" id="password" name="pwd">
                <i id = "icon_2" class="error-icon fas fa-exclamation-circle"></i>
              </div>
              <div id="pass_error">Password can't be blank</div>
            </div>
            
            <div class="form-row">
              <div class="col-lg-7">
                <input type="submit" value="Login" class="btn1 mt-3 mb-3" name="login" />
              </div>
            </div>
            <p>Don't have an account? <a href="register.php">Register Here</a></p>
          </form>
        </div>
      </div>
    </div>
  </section>
  <script src="javascript/script.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>