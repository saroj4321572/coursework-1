<?php
require('database.php');
session_start();

if (!$_SESSION['ticket']) {
  header('location:index.php');
}

?>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="homepage.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" style: href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-user-circle fa-lg"></i>  <span class="name"><?php echo $_SESSION['ticket'] ?></span>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
          </ul>
        </li>

      </div>

<!doctype html>
<html lang="en">

<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link type="text/css" href='css/style1.css' rel='stylesheet' />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css"></link>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="homepage.php">Employee Management System</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="homepage.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" style: href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-user-circle fa-lg"></i>  <span class="name"><?php echo $_SESSION['ticket'] ?></span>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
          </ul>
        </li>

      </div>
    </div>
  </nav>





  <div class="container">
    <div class="table-wrapper">
      <div class="table-title">
        <div class="row">
          <div class="col-sm-8">
            <h2>Manage <b>Employees</b></h2>
          </div>
          <div class="col-sm-4">
            <a href="add.php" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Add new employee</span></a>
          </div>
        </div>
      </div>

      <div class="table table-responsive col-lg-12">
        <table class="table table-sm table-striped table-hover">
          <thead>
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th>Gender</th>
              <th>Department</th>
              <th>Position</th>
              <th scope="col">Address</th>
              <th scope="col">Phone</th>
              <th scope="col">Actions</th>
              
            </tr>
          </thead>
          <tbody>
            <?php
            $q = "SELECT * FROM tbl_add";
            $result = $conn->query($q);
            while ($data = $result->fetch_assoc()) {
            ?>
              <tr>
                <td scope="row"><?php echo $data["nam"]; ?></td>
                <td><?php echo $data["em"];?></td>
                <td><?php echo $data['gen'];?></td>
                <td><?php echo $data['dept'];?></td>
                <td><?php echo $data['pos'];?></td>
                <td><?php echo $data["addr"];?></td>
                <td><?php echo $data["ph"];?></td>
                <td>
                  <form action="action.php" method="post">
                    <a href="edit.php?eid=<?php echo $data['id']; ?>" class="edit"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                    <a href="delete.php?eid=<?php echo $data['id']; ?>" class="delete" name="delete"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                  </form>
                </td>
              </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
      </div>
      </div>
    </div>
  </div>
</body>

</html>