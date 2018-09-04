<div id="myDiv" class="animate-bottom" style="margin:0;padding:0;background-color:white">

<div class="row p-4">
    <?php
   if(isset($_GET['detail_id'])){
     $pid=$_GET['detail_id'];
   }
  $cricketMatchesTxt = file_get_contents("http://cricapi.com/api/playerStats/?apikey=$api_key&pid={$pid} ");	// change with your API key
  $cricketMatches = json_decode($cricketMatchesTxt);

  ?>

  <div class="container">
    <h2><?php echo $cricketMatches->name; ?></h2>
    <img src="<?php echo $cricketMatches->imageURL;?>" alt="Refresh the page to load the image">
  </div>


</div>
 <hr>

<div class="container">

<div class="form-group">
  <h5 class="form-control"><b>Full Name:</b> <span style="width:50%;display:inline-block"></span> <?php echo $cricketMatches->fullName; ?></h5>
  <h5 class="form-control"><b>Born:</b><span style="width:50%;display:inline-block"></span>  <?php echo $cricketMatches->born; ?></h5>
  <h5 class="form-control"><b>Batting Style:</b><span style="width:50%;display:inline-block"></span>     <?php echo $cricketMatches->battingStyle; ?></h5>
  <h5 class="form-control"><b>Bowling Style:</b><span style="width:50%;display:inline-block"></span>     <?php echo $cricketMatches->bowlingStyle; ?></h5>
  <h5 class="form-control"><b>Teams:</b><span style="width:50%;display:inline-block"></span>   <?php echo $cricketMatches->majorTeams; ?></h5>
  <h5 class="form-control"><b>Age:</b><span style="width:50%;display:inline-block"></span>    <?php echo $cricketMatches->currentAge; ?></h5>
  <h5 class="form-control"><b>Country:</b><span style="width:50%;display:inline-block"></span>    <?php echo $cricketMatches->country; ?></h5>
<h5 class="form-control"><b>Playing Role:</b><span style="width:50%;display:inline-block"></span>    <?php echo $cricketMatches->playingRole; ?></h5>
</div>





</div>


<hr>

<div class="jumbotron container">

    <div class="card-body">
      <h2 class="card-title font-weight-bold">Profile</h2>
      <h5 class="card-text"><?php echo $cricketMatches->profile; ?></h5>

  </div>

</div>


<hr>
</div>
