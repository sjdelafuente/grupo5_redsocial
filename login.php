<?php


?>


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
  <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <!--LOGIN MAIN FORM-->
        <div class="bg-color">
            <div class="container">
              <div class="row justify-content-center">
                            <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                                <div class="panel panel-info" >
                                        <div class="panel-heading">
                                            <div class="panel-title"><span class="panel-title-span">HOST</span>HELPER</div>
                                            <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
                                        </div>

                                        <div style="padding-top:30px" class="panel-body">

                                            <form id="loginform" class="form-horizontal" role="form">

                                                <div style="margin-bottom: 25px" class="input-group">
                                                            <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email">
                                                        </div>

                                                <div style="margin-bottom: 25px" class="input-group">
                                                            <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                                                        </div>



                                                <div class="input-group">
                                                          <div class="checkbox">
                                                            <label>
                                                              <input id="login-remember" type="checkbox" name="remember" value="1"><span class="login-remember">Remember Me</span>
                                                            </label>
                                                          </div>
                                                        </div>


                                                    <div style="margin-top:10px" class="form-group">
                                                        <!-- Button -->

                                                        <div class="col-sm-12 controls">
                                                          <a id="btn-login" href="#" class="btn btn-success">Login  </a>
                                                          <a id="btn-fblogin" href="#" class="btn btn-primary">Login with Facebook</a>

                                                        </div>
                                                    </div>


                                                    <div class="form-group">
                                                        <div class="col-md-12 control">
                                                            <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                                                Don't have an account!
                                                            <a href="register.html" target="_blank">
                                                                Register Here!
                                                            </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                            </div>
                        </div>
              </div>
              <!--FOOTER-->
              <div class="card text-center">
                      <div class="card-header">
                          <div class="card-body">
                              <h5 class="card-title">We want you to ride the world...</h5>
                              <p class="card-text">Check your future destinies!</p>
                              <a href="index.html" class="btn btn-primary">HOME</a>
                            </div>
                        </div>
              </div>
            </div>
        </div>
</body>
</html>