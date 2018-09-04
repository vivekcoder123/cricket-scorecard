<?php
session_start();
ob_start();
require_once("includes/functions.php");

if(!isset($_SESSION['email'])){
  redirect('login.php');
}

?>
<?php include "includes/header.php"; ?>
  <!-- Navbar -->
<?php include "includes/navigation_dashboard.php"; ?>
  <!-- Navbar -->
  <!-- Full Page Intro -->

  <div class="view full-page-intro" style="background:url('img/stadium.jpg');background-repeat: no-repeat; background-size:cover; background-position: center center;background-attachment:fixed;height:30%;">


    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">


      <div class="container text-center">

      <h2 class="display-4" style="color:aqua;font-family:'Patua One',cursive;">LIVE.CRICKET</h2>
        <h2 style="color:grey;font-weight:bold;font-family:'Indie Flower',cursive;">your cricket scoreboard</h2>
      </div>


    </div>


  </div>

  <!--Main layout-->
  <?php
  if(isset($_GET['current'])){
    include "current.php";
  }else if(isset($_GET['upcoming'])){
    include "upcoming.php";
  }else if(isset($_GET['more_info'])){
    include "more_info.php";
  }else if(isset($_GET['search'])){
    include "search.php";
  }else if(isset($_GET['detail_id'])){
    include "details.php";
  }

   ?>

<?php

if(isset($_POST['search'])){

$name=$_POST['name'];
$name = preg_replace('#[ -]+#', '-', $name);
redirect("dashboard.php?search=$name ");

}

 ?>

   <div class="container">
     <div class="card" style="background:black;">
       <div class="card-body">
         <h2 class="card-title text-center" style="color:white;">Player Search</h2>
         <p class="card-text text-center" style="color:white;">Search Everything About Your Favourite Cricket Player</p>
         <form class="form-group text-center" action="" method="post">
            <div class="input-group">
             <input type="text" name="name" value="" placeholder="Enter Player Name" class="form-control">
             <button class="input-group-btn" type="submit" name="search">
              <i class="fa fa-search"></i>
            </button>
            </div>
         </form>

       </div>
     </div>

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

    var myVar;

function myFunction() {
 return showPage();
}

function showPage() {
 document.getElementById("loader").style.display = "none";
 document.getElementById("myDiv").style.display = "block";
}

    new WOW().init();



  </script>
</body>

</html>
