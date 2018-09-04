<div class="row p-4">

<?php

$cricketMatchesTxt2 = file_get_contents("http://cricapi.com/api/fantasySummary/?apikey=$api_key&unique_id=$match_id");	// change with your API key
$cricketMatches2 = json_decode($cricketMatchesTxt2);

?>
  <h2 class="font-weight-bold"><?php echo $cricketMatches2->data->team[0]->name; ?> Innings</h2>
   <table class="table table-striped table-bordered">
     <thead>
       <tr style="background:black;color:white">
         <th>Batsman</th>
         <th>Dismissal Type</th>
         <th>Runs</th>
         <th>Balls</th>
         <th>4s</th>
         <th>6s</th>
         <th>SR</th>
       </tr>
     </thead>
     <tbody>

 <?php

 foreach($cricketMatches2->data->batting[0]->scores as $item) {

 $item=(object)$item;

  ?>

       <tr>
       <td><?php echo $item->batsman; ?></td>
       <td><?php echo $item->dismissal; ?></td>
       <td><?php echo $item->R; ?></td>
       <td><?php echo $item->B; ?></td>
       <td><?php echo $item->{'4s'}; ?></td>
       <td><?php echo $item->{'6s'}; ?></td>
       <td><?php echo $item->SR; ?></td>
       </tr>
       <?php } ?>

     </tbody>
   </table>

</div>

<div class="row p-4">

  <h2 class="font-weight-bold"><?php echo $cricketMatches2->data->team[1]->name; ?> Innings</h2>
   <table class="table table-striped table-bordered">
     <thead>
       <tr style="background:black;color:white">
         <th>Batsman</th>
         <th>Status</th>
         <th>Runs</th>
         <th>Balls</th>
         <th>4s</th>
         <th>6s</th>
         <th>SR</th>
       </tr>
     </thead>
     <tbody>

 <?php

 foreach($cricketMatches2->data->batting[1]->scores as $item) {

 $item=(object)$item;

  ?>

       <tr>
       <td><?php echo $item->batsman; ?></td>
       <td><?php echo $item->{'dismissal-info'}; ?></td>
       <td><?php echo $item->R; ?></td>
       <td><?php echo $item->B; ?></td>
       <td><?php echo $item->{'4s'}; ?></td>
       <td><?php echo $item->{'6s'}; ?></td>
       <td><?php echo $item->SR; ?></td>
       </tr>
       <?php } ?>

     </tbody>
   </table>

</div>
