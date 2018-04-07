<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php require_once "../controller/airportList.php" ?>
    <?php require_once "../controller/adminController.php"?>
    <?php require_once "../controller/getFlightList.php"?>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
        $(".test").submit(function(event) {
        	event.preventDefault();
        	var iata_code = $("#iata_code").val();
          var airport_location = $("#airport_location").val();
          var airport_information = $("#airport_information").val();
        	var addAirport = $("#addAirport").val();
        	$(".tesst").load("../controller/adminController.php", {
        		iata_code: iata_code,
            airport_location: airport_location,
            airport_information: airport_information,
        		addAirport: addAirport
        	});

        });
    	});
    </script>
  </head>
  <body>
    <form class="test" action="../view/admin2.php" method="post">
      <input type="text" id="iata_code" />
      <input type="submit" id="addAirport" />
    </form>
    <form class="test" action="../view/admin2.php" method="post">
      <div class="form-group"> <!-- Date input -->
        <label class="control-label" ><br/>IATA Code</label>
        <input class="form-control" id="iata_code" name="iata_code" placeholder="IATA_Code" type="text"/>
      </div>

      <div class="form-group"> <!-- Date input -->
        <label class="control-label" ><br/>Airport Location</label>
        <input class="form-control" id="airport_location" name="airport_location" placeholder="Airport Location" type="text"/>
      </div>

      <div class="form-group"> <!-- Date input -->
        <label class="control-label" ><br/>Airport Information</label>
        <input class="form-control" id="airport_information" name="airport_information" placeholder="Airport Information e.g: travel time" type="text"/>
      </div>

    </table>
      <div class="form-group"> <!-- Submit button -->
        <input class="btn btn-primary" name="addAirport" type="submit" value="Add Airports">
      </div>
     </form>
<br />
<table class="table table-bordered">
  <thead>
    <th>IATA Code</th>
    <th>Airport</th>
    <th>Flight Information</th>
  </thead>
 <?php foreach ($airportList as $airport): ?>
  <tr class="tesst">
    <td><?=$airport->IATA_Code?></td>
    <td><?=$airport->Airport_Location?></td>
    <td><?=$airport->Airport_Information?></td>
  </tr>
  <?php endforeach ?>
</table>

  </body>
</html>
