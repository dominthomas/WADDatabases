$(document).ready(function() {

  $('#login-form-link').click(function(e) {
  $("#login-form").delay(100).fadeIn(100);
  $("#register-form").fadeOut(100);
  $('#register-form-link').removeClass('active');
  $(this).addClass('active');
  e.preventDefault();
});
$('#register-form-link').click(function(e) {
  $("#register-form").delay(100).fadeIn(100);
  $("#login-form").fadeOut(100);
  $('#login-form-link').removeClass('active');
  $(this).addClass('active');
  e.preventDefault();
});
// Form validation
$('#login-form').submit(function(){
  if($('#login-form #username').val() == ""){
    alert("Please Enter a Username");
    return false;
  }
  if($('#login-form #password').val() == ""){
    alert("Please Enter a Password");
    return false;
  }});

$('#register-form').submit(function(){
  if($('#register-form #username').val() == ""){
    alert("Please Enter a Username");
    return false;
  }
  if($('#register-form #password').val() == ""){
    alert("Please Enter a Password");
    return false;
  }
  else if($('#register-form #password').val().length < 6){
    alert("Password must be longer than 6 characters");
    return false;
  }
  if($('#register-form #confirm-password').val() != $('#register-form #password').val()){
    alert("You passwords do not match");
    return false;
  }
 if($('#register-form #adminkey').val() == ""){
  alert("Please enter the Admin Key");
  return false;
}
 else{
   $.get("../controller/adminLogin.php?adminkey=", {"adminkey" : $('#register-form #adminkey').val()}).fail(function(){
     alert("Can't find page");
   }).done(function(data){
     if(data != ""){
       alert(data);
       return false;
     }
     else{
       alert("Sign Up Sucessful");
     }
   });
 }
});

});
