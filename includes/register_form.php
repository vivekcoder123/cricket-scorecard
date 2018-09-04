
<form method="post" action="">
  <!-- Heading -->
  <h3 class="dark-grey-text text-center">
    <strong>Register</strong>
  </h3>
  <hr>

  <div class="md-form">
    <i class="fa fa-user prefix grey-text"></i>
    <input type="text" id="form3" class="form-control" name="namer" required value="<?php echo isset($_POST['namer']) ? $_POST['namer'] : '' ?>">
    <label for="form3">Your name</label>
  </div>
  <div class="md-form">
    <i class="fa fa-envelope prefix grey-text"></i>
    <input type="text" id="form2" class="form-control" name="emailr" required value="<?php echo isset($_POST['emailr']) ? $_POST['emailr'] : '' ?>">
    <label for="form2">Your email</label>
  </div>

  <div class="md-form">
    <i class="fa fa-key prefix grey-text"></i>
    <input type="password" id="form8" class="form-control" name="passr" required>
    <label for="form8">Your Password</label>
  </div>

  <div class="md-form">
    <i class="fa fa-key prefix grey-text"></i>
    <input type="password" id="form100" class="form-control" name="cpassr" required>
    <label for="form100">Confirm Your Password</label>
  </div>
  <h5 class="text-danger" style="display:none;" id="error">Both passwords don't match</h5>

  <div class="text-center">
    <?php display_message(); ?>
    <input type="submit" name="register" value="Register" class="btn btn-indigo">
	<hr>
   <h5 class="pb-3">Already Registered? <a href="login.php"> LOGIN </a>here</h5>
   
  </div>

</form>

<!-- Form -->
