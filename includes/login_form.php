  <form action="" method="post">
 <?php login_user(); ?>
      <div class="form-group pt-2">
       <input type="email" name="email" placeholder="Enter Your Email" class="form-control" required value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>">
      </div>

      <div class="form-group pt-2">
       <input type="password" name="password" placeholder="Enter Your Password" class="form-control" required id="pass">
      </div>

       <div class="form-group pt-2">
         <input type="checkbox" onclick="showpass()">
         <span class="font-weight-bold" style="color:indigo;">Show password</span>
       </div>

        <input type="submit" name="login" value="Log In" class="btn btn-success">

</form>
           <br>
        <span class="font-weight-bold text-light">OR</span>

        <br>
       <button type="button" onclick="window.location='<?php echo $loginUrl;?>' " class="btn btn-danger" style="color:white;">
        <i class="fa fa-google p-2"></i> Login With Google
       </button>

      <h5 class="pt-2" style="color:white;">Not Yet Registered? <a href="index.php" class="text-primary font-weight-bold">REGISTER</a> here</h5>
