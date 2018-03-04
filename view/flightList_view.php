<!DOCTYPE HTML>
  <html>
    <?php require_once "../controller/flightList.php" ?>
    <head>
        <title>List of available Flights</title>
    </head>
    <body>
      <table>
        <thead>
          <th>From</th>
          <th>To</th>
          <th>Departure</th>
          <th>Arrival</th>
        </thead>
        <?php foreach ($flightList as $flight): ?>
          <tr>
            <td><?= $flight->Departure_IATA_Code ?></td>
            <td><?= $flight->?></td>
          </tr>
        <?php endforeach ?>
      </table>
    </body>
  </html>
