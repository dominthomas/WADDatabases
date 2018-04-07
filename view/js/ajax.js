$(document).ready(function(){
    $('.add').on('click', function (event) {
      event.preventDefault();
      var addFlight = $(this).val();
      $(".form-message").load("../controller/basketController.php", {
        addFlight: addFlight
      });

    });
});

$(document).ready(function(){
    $('.delete').on('click', function (event) {
      event.preventDefault();
      var deleteFlight = $(this).val();
      $(".form-message").load("../controller/basketController.php", {
        deleteFlight: deleteFlight
      });

    });
});

function myFunction() {
    var x = document.getElementById("snackbar")
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
