<?php require_once ('form_validate.php'); ?>
<?php
    if($_POST) {
              // Validamos los campos
      if (empty(old('user'))) {
        addError('user', "Debe introducir su email.");
      }
      if (empty(old('password'))) {
        addError('password', "Debe introducir su password.");
      }
      if(isValid()) {
          header('location: perfil.php');
      }
    }
?>
<?php require_once('partials/headLogin.php'); ?>

<body>
    <!--LOGIN MAIN FORM-->
        <div class="bg-color">
            <div class="container">
              <div class="column justify-content-center">
                            <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                                <div class="panel panel-info" >
                                        <div class="panel-heading">
                                            <div class="panel-title"><span class="panel-title-span">HOST</span>HELPER</div>
                                            <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
                                        </div>

                                        <div style="padding-top:30px" class="panel-body">

                                            <form action="login.php" class="form-horizontal" method="post">

                                                <div style="margin-bottom: 25px" class="input-group">
                                                    <input id="login-username" type="text" class="form-control" name="user" placeholder="Write your email...">
                                                        <?php if (hasError('user')) : ?>
                                                        <p class="error"><?= getError('user') ?></p>
                                                        <?php endif ?> 
                                                </div>

                                                <div style="margin-bottom: 4px" class="input-group">
                                                    <input id="login-password" type="password" class="form-control" name="password"  placeholder="Write your password...">
                                                        <?php if (hasError('password')) : ?>
                                                        <p class="error"><?= getError('password') ?></p>
                                                        <?php endif ?> 
                                                </div>



                                                <div class="input-group">
                                                          <div class="checkbox">
                                                            <label>
                                                              <input id="login-remember" type="checkbox" name="remember" value="1"><span class="login-remember">Remember Me</span>
                                                            </label>
                                                          </div>
                                                        </div>


                                                    <div style="margin-top:14px" class="form-group">
                                                        <!-- Button -->

                                                        <div class="col-sm-12 controls">
                                                          <input type="submit" name="submit" class="btn btn-success" value="Login">
                                                        </div>
                                                    </div>


                                                    <div class="form-group">
                                                        <div class="col-md-12 control">
                                                            <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                                                <p class="accQuestion"> Don't have an account? </p>
                                                            <a class="btn btn-primary" href="register.php" target="_blank">
                                                                Register Here
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
<?php require_once ('partials/footerLogin.php'); ?>
            </div>
        </div>
</body>
</html>
