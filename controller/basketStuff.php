<?php
require_once "flightList.php";
require_once "basketController.php";
?>

<div class="tab-pane">
    <h3>Your Basket</h3>
    <table class="table table-bordered">
      <thead>
      <th>Flight Number</th>
      <th>Aircraft ID</th>
      <th>Departure IATA Code</th>
      <th>Departure Date</th>
      <th>Arrival IATA Code</th>
      <th>Cost</th>
      <th>Departure Time</th>
      <th>Flight Duration</th>
      <th>Item Action</th>
      </thead>
       <form action="../controller/basketController.php" method="get">
         <?php if(count($addedFlights) != 0):
           foreach($addedFlights as $flightnum):?>

     <?php foreach ($flightList as $flight):
        if(strcasecmp($flightnum, $flight->Flight_Number) == 0): ?>
       <div class="form-group">
      <tr>
        <?php foreach ($airportList as $airport): ?>
           <?php if($airport->IATA_Code == $flight->Departure_IATA_Code){
           $airport1 = $airport->Airport_Location;}
           if($airport->IATA_Code == $flight->Arrival_IATA_Code){
           $airport2 = $airport->Airport_Location;}?>
             <?php endforeach ?>
        <td><?=$flight->Flight_Number?></td>
        <td><?=$flight->Aircraft_ID?></td>
        <td><?=$airport1?> (<?=$flight->Departure_IATA_Code?>)</td>
        <td><?=$flight->Departure_Date?></td>
        <td><?=$airport2?> (<?=$flight->Arrival_IATA_Code?>)</td>
        <td><?=$flight->Cost?></td>
        <td><?=$flight->Departure_Time?></td>
        <td><?=$flight->Flight_Duration?></td>
        <td><button class="delete btn btn-primary" type="submit" name="deleteFlight" value=<?=$flight->Flight_Number ?> > Delete Flight </buton></td>
      </tr>
    </div>
<?php endif ?>
<?php endforeach ?>
<?php endforeach ?>
<?php endif ?>
  </table>
</form>
<?php if(count($addedFlights) !==0): ?>
<a href="checkout.php"><button class="btn btn-primary" value="Checkout" name="checkoutButton">Checkout</button></a>
<?php endif ?>
</div>
