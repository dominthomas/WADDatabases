<!DOCTYPE HTML>
  <html>
    <?php require_once "../controller/customerList.php" ?>
    <head>
        <title>Customer List</title>
    </head>
    <body>
      <table>
        <thead>
          <th>First Names</th>
          <th>Surname</th>
        </thead>
        <?php foreach ($customerList as $customer): ?>
          <tr>
            <td><?= $customer->$First_Name ?></td>
          </tr>
        <?php endforeach ?>
      </table>
    </body>
  </html>
