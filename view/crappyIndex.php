<?php
/   <form action = "../controller/flightList.php" method="post">
         <div class="form-group">
           <label for="sel1">From</label>
            <select class="form-control" id="indexDeparture" name="indexDeparture">
              <option></option>
       <?php foreach ($airportList as $airport): ?>
 <option value=<?= $airport->IATA_Code ?> ><?= $airport->Airport_Location ?> (<?= $airport->IATA_Code ?>)</option>
 <?php endforeach ?>
 </select>
   </div>

     <div class="form-group">
       <label for="sel2">To</label>
        <select class="form-control" id="indexDestination" name ="indexDestination">
          <option></option>
   <?php foreach ($airportList as $airport): ?>
 <option value=<?= $airport->IATA_Code ?>><?= $airport->Airport_Location ?> (<?= $airport->IATA_Code ?>)</option>
 <?php endforeach ?>
 </select>


 </div>

 				<div class="form-group">
 					<label class="control-label" for="date"><br/>Departure Date</label>
 					<input class="form-control" id="indexDate" name="indexDate"  placeholder="YYYY-MM-DD" type="date" />
 				</div>

         <div class="form-group"> <!-- Submit button -->
    <button class="btn btn-primary " name="search1" type="submit">Search</button>
  </div>
 </form> */
?>
