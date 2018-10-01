<nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
  <div class="container">

    <!-- Brand -->
    <a class="navbar-brand" href="dashboard.php?current">
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
          <a href="https://www.facebook.com/mdbootstrap" class="nav-link" target="_blank">
            <i class="fa fa-facebook"></i>
          </a>
        </li>
        <li class="nav-item">
          <a href="https://twitter.com/MDBootstrap" class="nav-link" target="_blank">
            <i class="fa fa-twitter"></i>
          </a>
        </li>
        <li class="nav-item">
          <a href="https://test.instamojo.com/@vivekrautela000/" rel="im-checkout" data-behaviour="remote" data-style="light" data-text="Add Money"></a>
<script src="https://js.instamojo.com/v1/button.js"></script>

   <?php

$api = new Instamojo\Instamojo('test_50efd2a7a3df62447c5f2062bee','test_8860b71139ca7f630ee5d183096','https://test.instamojo.com/api/1.1/');

    ?>
          </a>
        </li>
      </ul>

      <ul class="navbar-nav nav-flex-icons">
         <li class="nav-item">
         <a href="includes/logout.php" class="nav-link border border-light rounded btn btn-danger">Log Out</a>
         </li>
      </ul>

    </div>

  </div>
</nav>
