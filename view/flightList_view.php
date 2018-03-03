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
          <th>Description</th>
        </thead>
        <?php foreach ($flightList as $flight): ?>
          <tr>
            <td><?= $flight->IATA_Code ?></td>
            <td><?= $customer->Last_Name ?></td>
          </tr>
        <?php endforeach ?>
      </table>
    </body>
  </html>
