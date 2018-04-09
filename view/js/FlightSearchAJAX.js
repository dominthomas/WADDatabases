$(document).ready(initialisePage);

function initialisePage(){

  $("div#ajaxFlightSearch input").keyup(handleAutoComplete);
}

function handleAutoComplete(){

  var search = $("div#ajaxFlightSearch input").val().trim();
  if (search != ""){
    $.get("getAirportService.php?airport="+search,autoCompleteCallback);
  }
  else {
    $("div#ajaxFlightSearch div.results").hide();
  }
}

function autoCompleteCallback(results){

  console.log(results);

  $("div#ajaxFlightSearch div.results").empty();

  for (var i = 0; i<results.length; i++){

    var result = $('<div class="result">'+results[i]+'</div>');
    result.click(function(){
      $("div#ajaxFlightSearch div.results").hide();
      $("input[name=search]").val($(this).text());
      $("form").get(0).submit();
    });
    $("div#ajaxFlightSearch div.results").append(result);
  }

  if (results.length==0){

    $("div#ajaxFlightSearch div.results").hide();
  }
  else{
    $("div#ajaxFlightSearch div.results").show();
  }

  }
}
