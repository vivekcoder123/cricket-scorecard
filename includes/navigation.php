<nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
  <div class="container">

    <!-- Brand -->
    <a class="navbar-brand" href="index.php">
      <strong>Fantrick</strong>
    </a>

    <!-- Collapse -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Links -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <!-- Left -->


      <!-- Right -->
      <ul class="navbar-nav nav-flex-icons mr-auto">

        <li class="nav-item">
          <a href="https://github.com/mdbootstrap/bootstrap-material-design" class="nav-link border border-light rounded"
            target="_blank">
            <strong class="mr-2">Download<small class="text-success"> android app</small></strong>
          </a>
        </li>
      </ul>

      <form class="form-inline" action="" method="post"  >
            <?php login_user(); ?>
          <div class="form-group m-2">
           <input type="email" name="email" placeholder="Enter Your Email" class="form-control" required value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>">
          </div>

          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text pl-4">
                <input class="form-check-input" type="checkbox" value="" onclick="showpass()" >
              </div>
            </div>
            <input type="password" name="password" required class="form-control" aria-label="password" placeholder="Enter Your Password" id="pass">
          </div>

          <input type="submit" name="login" value="Log In" class="btn btn-primary">

               <span class="text-light font-weight-bold p-1">OR</span>

          <button type="button" onclick="window.location='<?php echo $loginUrl;?>' " class="btn btn-danger">
            <i class="fa fa-google pr-2"></i> Log In
          </button>

      </form>

    </div>

  </div>
</nav>
