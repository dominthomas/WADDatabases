<script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

function validateAddAirports(){
  var iata = document.forms["addAirportForm"]["iata_code"] .value;
  var airport = document.forms["addAirportForm"]["airport_location"] .value;

  if(iata =="" || iata.length <3 || iata.length >3){
    alert("Please check your entry.");
    return false;
  }

  if(airport ==""){
    alert("Field must not be empty.");
    return false;
  }
}

function validateUpdateAirport(){
  var current_iata = document.forms["updateAirportForm"]["current_iata"] .value;
  var new_iata = document.forms["updateAirportForm"]["new_iata"] .value;
  var airport = document.forms["updateAirportForm"]["new_airport_location"] .value;

  if(current_iata =="" || current_iata.length <3 || current_iata.length >3){
    alert("Please check your entry.");
    return false;
  }

  if(new_iata=="" || new_iata.length <3 || new_iata.length >3){
    alert("Please check your entry.");
    return false;
  }

  if(airport ==""){
    alert("Field must not be empty.");
    return false;
  }
}

function validateDeleteAirport(){
  var delete_iata = document.forms["deleteAirportForm"]["delete_iata"] .value;

  if(delete_iata =="" || delete_iata.length <3 || delete_iata.length >3){
    alert("Please check your entry");
    return false;
  }
}

function validateAddFlight() {
  var flight_number = document.form["addFlightForm"]["flight_number"] .value;
  var aircraft_id = document.form["addFlightForm"]["aircraft_id"] .value;
  var departure_iata_code = document.form["addFlightForm"]["departure_iata_code"] .value;
  var departure_date = document.form["addFlightForm"]["departure_date"] .value;
  var arrival_iata_code = document.form["addFlightForm"]["arrival_iata_code"] .value;
  var cost = deocument.form["addFlightForm"]["cost"] .value;
  var departure_time = document.form["addFlightForm"]["departure_time"] .value;
  var flight_duration = document.form["addFlightForm"]["flight_duration"] .value;

  if(flight_number =="" || aircraft_id=="" || cost =="" || flight_duration=="" || departure_time==""){
    alert("field must not be empty");
    return false;
  }
  if(departure_iata_code =="" || departure_iata_code.length <3 || departure_iata_code.length >3 arrival_iata_code=="" || arrival_iata_code.length <3 || arrival_iata_code.length >3 ){
    alert("Please check your entry");
    return false;
  }

}

</script>
