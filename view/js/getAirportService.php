<?php
header('Content-Type: application/json');
require_once ("../../model/Airport.php");
require_once ("../../model/Database_Access.php");

if (!isset($_REQUEST["airport"]))
{
  echo json_encode([]); // send empty array
}
else {
  $airport = getAirportsByLetter($_REQUEST["airport"]);
  echo json_encode($airport);
}
?>
