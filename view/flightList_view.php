<!DOCTYPE HTML>
  <html>
    <?php require_once "../controller/flightList.php" ?>
    <head>
        <title>List of available Flights</title>
    </head>
    <body>
      <form action="../controller/flightList.php" method="get">
        Search flights by date:
        <input type="text" name="date"/><br/>
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
            <td><?= $flight->journey() ?></td>
          </tr>
        <?php endforeach ?>
      </table>
    </body>
  </html>
