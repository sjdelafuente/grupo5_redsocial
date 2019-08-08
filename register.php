<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Host Helper</title>
  <link rel="stylesheet" type="text/css" href="css/reset.css">
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link rel="stylesheet" href="css/register.css">
</head>
<body>
    <!--REGISTER MAIN FORM-->
    <div class="bg-color">
        <form action="register.php" method="post">
            <div class="container">
                    <div class="row justify-content-center">
                      <div class="col-12 col-md-8 col-lg-8 col-xl-6" style="margin-top: 50px;">
                        <div class="row">
                          <div class="col text-center">
                            <h1>Register in HOST<span class="register-title-helper">HELPER</span></h1>
                            <p class="text-h3">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                          </div>
                        </div>
                        <div class="row align-items-center">
                          <div class="col mt-4">
                            <input type="text" class="form-control" name="nombre" value="<?php if(isset($_POST["nombre"])) echo $_POST["nombre"] ?>" placeholder="Enter your first name...">
                          </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col mt-4">
                                <input type="text" class="form-control" name="apellido" value="<?php if(isset($_POST["apellido"])) echo $_POST["apellido"] ?>" placeholder="Enter your last name...">
                            </div>
                        </div>
                        <div class="row align-items-center mt-4">
                          <div class="col">
                            <input type="email" class="form-control" name="email" value="<?php if(isset($_POST["email"])) echo $_POST["email"] ?>" placeholder="Email">
                          </div>
                        </div>
                        <div class="row align-items-center mt-4">
                          <div class="col">
                            <input type="password" class="form-control" name="password" value="<?php if(isset($_POST["password"])) echo $_POST["password"] ?>" placeholder="Password">
                          </div>
                          <div class="col">
                            <input type="password" class="form-control" name="confirm_password" value="<?php if(isset($_POST["confirm_password"])) echo $_POST["confirm_password"] ?>" placeholder="Confirm Password">
                          </div>
                        </div>
                        <div class="row justify-content-start mt-3">
                          <div class="col">
                            <input class="btn btn-success mt-3" type="submit" name="submit" value="REGISTER">
                            <?php require_once('form_validate.php'); ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
                                <!--FOOTER-->
                        <div class="card">
                            <div class="card-header">
                                <div class="card-body">
                                    <h5 class="card-title">We want you to ride the world...</h5>
                                    <p class="card-text">Check your future destinies!</p>
                                    <a href="index.html" class="btn btn-primary">HOME</a>
                              </div>
                          </div>
                        </div>
    </div>
</body>
</html>