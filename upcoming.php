<div id="myDiv" class="animate-bottom" style="margin:0;padding:0;background-color:white">


<div class="row p-4">
    <?php

  $cricketMatchesTxt = file_get_contents("http://cricapi.com/api/matchCalendar/?apikey=$api_key");	// change with your API key
  $cricketMatches = json_decode($cricketMatchesTxt);


    foreach($cricketMatches->data as $item) {
  ?>

       <div class="col-xl-4">
         <div class="container m-2">
          <div class="card" style="background-color:white;border:2px solid grey">
            <div class="card-body" style="color:black;">
              <h5 class="card-title"><?php echo  $item->name; ?></h5>
              <p class="card-text"><?php echo  $item->date; ?></p>
              <a href="#" class="btn btn-primary">Coming Soon</a>
            </div>
          </div>
          </div>
       </div>

<?php } ?>
</div>

</div>
