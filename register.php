


<!DOCTYPE html>



<?php require_once('pdoRegister.php');?>
<?php require_once ('form_validate.php'); ?>


<?php


  if($_POST) {
      // Validamos los campos
      if (length(old('nombre'), 2, 255)) {
        addError('nombre', "Su nombre debe contener más de 2 caracteres.");
      }
      if(!preg_match('/^(?=.{3,18}$)[a-zñA-ZÑ](\s?[a-zñA-ZÑ])*$/', old('nombre'))) {
        addError('nombre', "Su nombre contiene caracteres incorrectos.");
      }
      if (empty(old('nombre'))) {
        addError('nombre', "Debe introducir su nombre.");
      }
      if (length(old('apellido'), 2, 255)) {
        addError('apellido', "Su apellido debe contener más de 2 caracteres.");
      }
      if(!preg_match('/^(?=.{3,18}$)[a-zñA-ZÑ](\s?[a-zñA-ZÑ])*$/', old('apellido'))) {
        addError('apellido', "Su apellido contiene caracteres incorrectos.");
      }
      if (empty(old('apellido'))) {
        addError('apellido', "Debe introducir su apellido.");
      }
      if (!email(old('email'))) {
        addError('email', "Debes escribir un email válido.");
      }
      if (length(old('password'), 8, 12)) {
        addError('password', "Su password debe contener entre 8 y 12 caracteres.");
      }
      if (empty(old('password'))) {
        addError('password', "Debe introducir su password.");
      }
      if (old('password') !== old('confirm_password')) {
        addError('confirm_password', "Tus passwords deben coincidir.");
      }
      if (empty(old('confirm_password'))) {
        addError('confirm_password', "Debe confirmar su password.");
      }
      if (isValid()) {
        $_SESSION['saludo'] = 'Welcome ' . old('nombre');
        header('location: index.php');
      }
}
?>

<?php require_once ('partials/headregister.php'); ?>
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
                            <input type="text" class="form-control" name="nombre" value="<?= old('nombre') ?>" placeholder="Enter your first name...">
                          <?php if (hasError('nombre')) : ?>
                          <p class="error"><?= getError('nombre') ?></p>
                          <?php endif ?> 
                          </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col mt-4">
                                <input type="text" class="form-control" name="apellido" value="<?= old('apellido') ?>" placeholder="Enter your last name...">
                                <?php if (hasError('apellido')) : ?>
                                <p class="error"><?= getError('apellido') ?></p>
                                <?php endif ?> 
                            </div>
                        </div>
                        <div class="row align-items-center mt-4">
                          <div class="col">
                            <input type="email" class="form-control" name="email" value="<?= old('email') ?>" placeholder="Email">
                            <?php if (hasError('email')) : ?>
                            <p class="error"><?= getError('email') ?></p>
                            <?php endif ?> 
                          </div>
                        </div>
                        <div class="row align-items-center mt-4">
                          <div class="col">
                            <input type="password" class="form-control" name="password" value="<?= old('password') ?>" placeholder="Password">
                          <?php if (hasError('password')) : ?>
                          <p class="error"><?= getError('password') ?></p>
                          <?php endif ?> 
                          </div>
                          <div class="col">
                            <input type="password" class="form-control" name="confirm_password" value="<?= old('confirm_password') ?>" placeholder="Confirm Password">
                          <?php if (hasError('confirm_password')) : ?>
                          <p class="error"><?= getError('confirm_password') ?></p>
                          <?php endif ?> 
                          </div>
                        </div>
                        <div class="row justify-content-start mt-3">
                          <div class="col">
                            <input class="btn btn-success mt-3" type="submit" name="submit" value="Register">
                            <?php if(hasError('submit')) : ?>
                            <p class="error"><?= getError('submit') ?>
                            <?php endif ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
    <?php require_once ('partials/footerRegister.php'); ?>
    </div>
</body>
</html>