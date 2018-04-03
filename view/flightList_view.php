<?php session_start(); ?>
<!DOCTYPE HTML>
  <html>
    <?php require_once "../controller/flightList.php" ?>
    <head>
        <title>List of available Flights</title>
    </head>
    <body>
      <form action="flightList_view.php" method="get">
        Search available flights:
        <input type="text" name="search" placeholder="YYYY-MM-DD"/><br/>
        <select name="option">
          <option value="1">Departure Date</option>
          <option value="2">Destination</option>
          <option value="3">Departure Airport</option>
          <option value="4">Day of the Week</option>
        </select>
        <input type="submit" value="Search"/>
      </form>
      <table>
        <thead>
          <th>From</th>
          <th>To</th>
          <th>Departure Date</th>
          <th>Time</th>
        </thead>
        <?php foreach ($flightList as $flight): ?>
          <tr>
            <td><?= $flight->Departure_IATA_Code ?></td>
            <td><?= $flight->Arrival_IATA_Code?></td>
            <td><?= $flight->Departure_Date ?></td>
          </tr>
        <?php endforeach ?>
      </table>
    </body>
  </html>
