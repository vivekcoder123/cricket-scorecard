<?php
session_start();
ob_start();
require_once("includes/functions.php");

require_once('config.php');
$loginUrl=$gclient->createAuthUrl();

if(isset($_SESSION['email'])){
  redirect('dashboard.php?current');
}

?>
<?php include "includes/header.php"; ?>
  <!-- Navbar -->
<?php include "includes/navigation_login.php"; ?>
  <!-- Navbar -->
  <!-- Full Page Intro -->

  <div class="view full-page-intro" style="background-image: url('img/home1.jpg'); background-repeat: no-repeat; background-size: cover;background-attachment:fixed;">

    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

      <!-- Content -->
      <div class="container text-center" style="width:70%">
         <h3 class="font-weight-bold">Log In</h3>
        <?php include "includes/login_form.php"; ?>


      </div>
      <!-- Content -->

    </div>
    <!-- Mask & flexbox options-->

  </div>
  <!-- Full Page Intro -->
  <!--Main layout-->
  <div id="myDiv" class="animate-bottom" style="margin:0;padding:0;">

  <!--Main layout-->
  </div>
  <!--Footer-->
  <?php include "includes/footer.php"; ?>
  <!--/.Footer-->
  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization

    var myVar;

function myFunction() {
 return showPage();
}

function showPage() {
 document.getElementById("loader").style.display = "none";
 document.getElementById("myDiv").style.display = "block";
}

function showpass() {
    var x = document.getElementById("pass");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

    new WOW().init();

    $(function(){

     $('#form100').on('keyup',function(){
       if($('#form8').val()!=$('#form100').val()){
         $("#error").show();
       }else{
          $("#error").hide();
        }
     });


    });

  </script>
</body>

</html>
