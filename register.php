<!doctype html>
<html lang="en">

<head>
  <title>Sign up</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link type="text/css" href='css/regis.css' rel='stylesheet' />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
  <div class="container">
    
      <a class="navbar-brand" href="login.php">Employee Management System</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-lg-0">
          <li class="nav-item active">
            <a class="nav-link " href="index.php">Login</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link disabled">Registration</a>
          </li>
        </ul>
      </div>

  </div>
</nav>

  
  <section class="Form my-4 mx-5">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-lg-5 px-0">
          <img src="images/pexels-evie-shaffer-8361170.jpg" class="img-fluid">
        </div>


        <div class="col-lg-7 px-5 pt-5">
          <h4>Registration</h4>
          <form action="action.php" method="post" id="form" name="form" onsubmit="return validated()" class="registerform" >
            <div class="form-row" id="form_username">
              <div class="col-lg-7">
                <label>Username</label>
                <input type="text" id="username" class="form-control my-1 p-1" name="usr">
                <i id ="icon_1" class="error-icon fas fa-exclamation-circle"></i>
              </div>
              <div id="usr_error">Username can't be blank</div>
            </div>
            <div class="form-row" id="form_email">
              <div class="col-lg-7">
                <label>Email Address</label>
                <input type="text" id="email" class="form-control my-1 p-1" name="em">
                <i id ="icon_2" class="error-icon fas fa-exclamation-circle"></i>
              </div>
              <div id="em_error">Email can't be blank</div>
            </div>
            <div class="form-row" id="form_password">
              <div class="col-lg-7">
                <label>Password</label>
                <input type="password" id="password" class="form-control my-1 p-1" name="pw">
                <i id ="icon_3" class="error-icon fas fa-exclamation-circle"></i>
              </div>
              <div id="pass_error">Password can't be blank</div>
            </div>
            <div class="form-row" id="form_confirm">
              <div class="col-lg-7">
                <label>Confirm Password</label>
                <input type="password" class="form-control my-1 p-1" id="confirm_pass" name="cpw">
                <i id ="icon_4" class="error-icon fas fa-exclamation-circle"></i>
              </div>
              <div id="con_error">Password can't be blank</div>
            </div> 
            <div class="form-row">
              <div class="col-lg-7">
                <input type="submit" value="Sign up" class="btn1 mt-3 mb-3" name="register" onclick="return validated();">
              </div>
            </div>
            <p>Already have an account? <a href="index.php">Login</a></p>
          </form>
        </div>
      </div>
    </div>
  </section>
<script src="javascript/register.js"></script>
</body>

</html>