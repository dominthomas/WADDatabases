
<?php foreach ($flightList as $flight){
  echo '<div class="form-group"> <tr>';
  foreach ($airportList as $airport){
    if($airport->IATA_Code == $flight->Departure_IATA_Code){
      $airport1 = $airport->Airport_Location;
    }

    if($airport->IATA_Code == $flight->Arrival_IATA_Code){
      $airport2 = $airport->Airport_Location;
    }
  }
  echo "<td>".$flight->Flight_Number."</td>";
  echo "<td>".$flight->Aircraft_ID."</td>";
  echo "<td>".$airport1."(".$flight->Departure_IATA_Code.")</td>";
  echo "<td>".$flight->Departure_Date."</td>";
  echo "<td>".$airport2."(".$flight->Arrival_IATA_Code.")</td>";
  echo "<td>".$flight->Cost."</td>";
  echo "<td>".$flight->Departure_Time."</td>";
  echo "<td>".$flight->Flight_Duration."</td>";
  echo '<td><button class="add btn btn-primary" type="submit" name="addFlight" value='.$flight->Flight_Number.'> Add to Basket </buton></td>';
  echo "</tr></div>";


}
