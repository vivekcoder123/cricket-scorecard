<div id="myDiv" class="animate-bottom" style="margin:0;padding:0;background-color:white">


<div class="row p-4">
    <?php

  $cricketMatchesTxt = file_get_contents("http://cricapi.com/api/cricket/?apikey=$api_key");	// change with your API key
  $cricketMatches = json_decode($cricketMatchesTxt);


    foreach($cricketMatches->data as $item) {
  ?>

       <div class="col-xl-4">
         <div class="container m-2">
          <div class="card" style="background-color:white;border:2px solid grey">
            <div class="card-body" style="color:black;">
              <h5 class="card-title"><?php echo  $item->title ;?></h5>
              <p class="card-text"><?php echo $item->description;?></p>
              <a href="dashboard.php?more_info=<?php echo $item->unique_id?>" class="btn btn-primary">Full Scorecard</a>
            </div>
          </div>
          </div>
       </div>

<?php } ?>
</div>
<hr>
<a href="dashboard.php?upcoming" target="_blank" class="btn btn-warning">Upcoming Matches</a>
<hr>
</div>
