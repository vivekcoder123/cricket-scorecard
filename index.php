<?php
session_start();
ob_start();
require_once("includes/functions.php");
require_once('config.php');
$loginUrl=$gclient->createAuthUrl();

if(isset($_SESSION['email'])){
  redirect('dashboard.php?current');
}

if(isset($_POST['register'])){

$name=$_POST['namer'];
$email=$_POST['emailr'];
$pass=$_POST['passr'];
$cpass=$_POST['cpassr'];

if($pass!=$cpass){
  set_message("<h5 class='text-danger font-weight-bold'>Both Passwords don't match<h5>");
}

else if(strlen($pass)<8){
  set_message("<h5 class='text-danger font-weight-bold'>Password should be minimum of 8 characters<h5>");
}

else{

   $select_query=query("SELECT * from users WHERE email='$email' ");
   confirm($select_query);
   $rows=mysqli_num_rows($select_query);
   if($rows==0){
     $insert_query=query("INSERT into users(id,name,email,password) VALUES('','$name','$email','$pass')");
     confirm($insert_query);
     set_message("<h5 class='text-success font-weight-bold'>Registered Successfully<h5>");
      echo "<script>";
      echo "setTimeout(function(){
        window.location.assign('index.php');
      },2000)";
      echo "</script>";
   }else{
     set_message("<h5 class='text-danger font-weight-bold'>Email Id already exists<h5>");
   }

}


}

 ?>

<?php include "includes/header.php"; ?>
  <!-- Navbar -->
<?php include "includes/navigation.php"; ?>
  <!-- Navbar -->
  <!-- Full Page Intro -->


  <div class="view full-page-intro" style="background-image: url('img/home1.jpg'); background-repeat: no-repeat; background-size: cover;background-attachment:fixed">

    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

      <!-- Content -->
      <div class="container">

        <!--Grid row-->
		<br>
		<br>
    <br>
    <br>
        <div class="row wow fadeIn mt-4">

          <!--Grid column-->
        <?php include "includes/left_side_of_register_form.php"; ?>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6 col-xl-5 mb-6">

            <!--Card-->
            <div class="card">

              <!--Card content-->
              <div class="card-body">

                <!-- Form -->
              <?php include "includes/register_form.php"; ?>

              </div>

            </div>
            <!--/.Card-->

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </div>
      <!-- Content -->

    </div>
    <!-- Mask & flexbox options-->

  </div>

  <!-- Full Page Intro -->
  <!--Main layout-->
  <div id="myDiv" class="animate-bottom" style="margin:0;padding:0;">
  <main>

    <div class="container">

      <!--Section: Main info-->
      <section class="mt-5 wow fadeIn">

        <!--Grid row-->

        <!--Grid row-->

      </section>
      <!--Section: Main info-->

      <hr class="my-5">

      <!--Section: Main features & Quick Start-->
    <?php include "includes/how_to_play.php"; ?>
      <!--Section: Main features & Quick Start-->

      <hr class="my-5">

      <!--Section: Not enough-->

      <!--Section: Not enough-->



      <!--Section: More-->
      <?php include "includes/testimonials.php"; ?>
      <!--Section: More-->

    </div>
  </main>
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

    var typed = new Typed('.typed', {
      strings: ["WIN CASH DAILY !", "MAKE EVERY GAME EXCITING !"],
      typeSpeed: 100,
      backSpeed:100,
      backDelay:1000,
      loop:true
    });


  </script>
</body>

</html>
