<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

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
        	$(".tesst").load("test3.php", {
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
    <form class="test">
      <input type="text" placeholder="iata_code" id="iata_code" />
      <input type="text" placeholder="airport_location" id="airport_location" />
      <input type="text" placeholder="airport_information" id="airport_information" />
      <input type="submit" id="addAirport" />

    </form>

<br />
<div class="tesst">

</div>

  </body>
</html>
