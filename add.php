<?php
require('database.php');
session_start();


if (!$_SESSION['ticket']) {
    header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link type="text/css" href="css/style1.css" rel="stylesheet" />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <title>add employee</title>
  </head>

  <body>
    <div class="container">
      <div class="table-wrapper">
        <div class="table-title">
          <div class="row">
            <div class="col-sm-8">
              <h2>Add <b>Employees</b></h2>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <form method="post" action="action.php">
            <div class="form-group">
              <label>Name</label>
              <input type="text" class="form-control" name="nam" />
            </div>
            <div class="form-group mt-2">
              <label>Email</label>
              <input type="email" class="form-control" name="em" />
            </div>
            <div class="form-group mt-2">
              <label class="mb-1">Gender</label>
              <div class="form-check form-check-outline">
                <input
                  class="form-check-input"
                  type="radio"
                  value="Male"
                  name="gen"
                />
                <label class="form-check-label">Male</label>
              </div>
              <div class="form-check form-check-inline">
                <input
                  class="form-check-input"
                  type="radio"
                  value="Female"
                  name="gen"
                />
                <label class="form-check-label">Female</label>
              </div>
            </div>
            <div class="form-group mt-3 my-3">
              <label>Department</label>
              <div>
                <select name="dept">
                  <option value = "Designing">Designing</option>
                  <option value = "Marketing">Marketing</option>
                  <option value = "Production">Production</option>
                  <option value = "Human Resource Management">Human Resource Management</option>
                  <option value = "Sales">Sales</option>
                </select>
              </div>
            </div>
            <div class="form-group mt-3 my-3">
              <label>Position</label>
              <div>
                <select name="pos">
                  <option value="Supervisor">Supervisor</option>
                  <option value="Product Manager">Product Manager</option>
                  <option value="Finance Manager">Finance Manager</option>
                  <option value="Business Analyst">Business Analyst</option>
                  <option value="Sales Representative">Sales Representative</option>
                </select>
              </div>
            </div>
            <div class="form-group mt-2">
              <label>Address</label>
              <input type="text" class="form-control" name="addr" />
            </div>
            <div class="form-group mt-2">
              <label>Phone</label>
              <input type="text" class="form-control" name="ph" />
            </div>
            <button
              type="submit"
              class="btn btn-primary mt-3"
              name="add_employee"
            >
              Add
            </button>
            <a href="homepage.php" class="btn btn-secondary mt-3">Cancel</a>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
