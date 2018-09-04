<div class="row p-4">
<div class="col-xs-6 col-md-6 col-lg-6">


<?php


  $cricketMatchesTxt3 = file_get_contents("http://cricapi.com/api/fantasySummary/?apikey=$api_key&unique_id=$match_id");	// change with your API key
  $cricketMatches3 = json_decode($cricketMatchesTxt3);
?>
  <h2 class="card-title">Playing XI Of <?php echo $cricketMatches3->data->team[0]->name; ?></h2>
<?php
  foreach ($cricketMatches3->data->team[0]->players as $item) {


 ?>
<div class="card">
  <div class="card-body">
    <h5 class="card-text"><?php echo $item->name; ?></h5>
  </div>

</div>
<?php } ?>
</div>

<div class="col-xs-6 col-md-6 col-lg-6">

  <h2 class="card-title m-2">Playing XI Of <?php echo $cricketMatches3->data->team[1]->name; ?></h2>
<?php
  foreach ($cricketMatches3->data->team[1]->players as $item) {


 ?>
<div class="card">
  <div class="card-body">
    <h5 class="card-text"><?php echo $item->name; ?></h5>
  </div>

</div>
<?php } ?>
</div>
</div>

<hr>

<?php include "includes/fullscoreboard.php"; ?>

<hr>

<h3 class="text-center mt-4 font-weight-bold"><u>SQUADS</u></h3>

<div class="container p-4">

    <?php

  $cricketMatchesTxt = file_get_contents("http://cricapi.com/api/fantasySquad/?apikey=$api_key&unique_id=$match_id");	// change with your API key
  $cricketMatches = json_decode($cricketMatchesTxt);

    foreach($cricketMatches->squad as $item) {
  ?>


              <h5><?php echo  $item->name; ?></h5>

              <p class="d-flex flex-row">

                <?php

              foreach($item->players as $player){

               echo $player->name.",";
             }
             ?>

              </p>


<?php } ?>
</div>
