<!DOCTYPE HTML>
  <html>
    <?php require_once "../controller/airportList.php" ?>
    <head>
        <title>Airport List</title>
    </head>
    <body>
      <table>
        <thead>
          <th>IATA Code</th>
          <th>Airport</th>
          <th>Information</th>
        </thead>
        <?php foreach ($airportList as $airport): ?>
          <tr>
            <td><?= $airport->IATA_Code ?></td>
            <td><?= $airport->Airport_Location ?></td>
            <td><?= $airport->Airport_Information ?></td>
          </tr>
        <?php endforeach ?>
      </table>
    </body>
  </html>
