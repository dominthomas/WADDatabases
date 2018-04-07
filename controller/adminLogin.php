<?php
require_once '../model/Database_Access.php';
require_once '../model/Admin.php';
require_once "../model/AdminKey.php";
// Define variables and initialize with empty values
$emailSignUp= $password = $confirm_password = $admin_key ="";
$email_err = $password_err = $confirm_password_err = $admin_key_err ="";


// Processing form data when form is submitted
if(isset($_SERVER["emailSignUp"])){
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validate email
    if(empty(trim($_REQUEST["emailSignUp"]))){
        $email_err = "Please enter a email.";
    } else{

        $admin = new Admin();
        $admin->Email_Address= htmlentities(trim($_REQUEST["emailSignUp"]));
        $admin_results= Database_Access::getInstance()->getAdminByEmail($admin);
        if($admin_results->rowCount() == 1){
          $email_err = "Email already exists";
        }
        else{
          $emailSignUp = htmlentities(trim($_REQUEST["emailSignUp"]));
        }
            }

    // Validate password
    if(empty(trim($_REQUEST['passwordSignUp']))){
        $password_err = "Please enter a password.";
    } elseif(strlen(trim($_REQUEST['passwordSignUp'])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = htmlentities(trim($_REQUEST['password']));
    }

    // Validate confirm password
    if(empty(trim($_REQUEST["confirmPasswordSignUp"]))){
        $confirm_password_err = 'Please confirm password.';
    } else{
        $confirm_password = htmlentities(($_REQUEST['confirmPasswordSignUp']));
        if($password != $confirm_password){
            $confirm_password_err = 'Password did not match.';
        }
    }

    if(empty(trim($_REQUEST['adminkey']))){
        $admin_key_err = "Please enter the admin key.";
    }
     else{
        $admin_key = htmlentities(trim($_REQUEST['adminkey']));
        $admin_key_results= Database_Access::getInstance()->getAdminKey($admin_key);
        if (strcasecmp($admin_key_results->Admin_Key,$admin_key) == 0 ){
          $admin_key_err = "";

          if(empty($email_err) && empty($password_err) && empty($confirm_password_err) && empty($admin_key_err)){


            $hashedPassword= password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

            $admin = new Admin();
            $admin->Email_Address = $emailSignUp;
            $admin->Password = $hashedPassword;
            Database_Access::getInstance()->addAdmin($admin);
            header("Location: ../view/AdminLogin.php");
              }
        }
        else{
          $admin_key_err = "Wrong admin key!";
        }
    }
}
}
// admin register finishes.


// Define variables and initialize with empty values
$email = $password = "";
$email_err= $password_err = "";

// Processing form data when form is submitted
if(isset($_REQUEST["email"])){
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Check if email is empty
    if(empty(trim($_REQUEST["email"]))){
        $email_err = 'Please enter email.';
    }

    // Check if password is empty
    if(empty(trim($_REQUEST['password']))){
        $password_err = 'Please enter your password.';
    }

    // Validate credentials
    if(empty($email_err) && empty($password_err)){
        // Prepare a select statement
        $admin = new Admin();
        $admin->Email_Address = htmlentities(trim($_REQUEST['email']));
        $admin->Password = htmlentities(trim($_REQUEST['password']));
        $admin_results = Database_Access::getInstance()->getAdminByEmail($admin);

         if($admin_results->rowCount == 1){
           if(password_verify($admin->Password, $admin_results->Password)){
             session_start();
             $_SESSION['email'] = $admin->Email_Address;
             header("Location: ../view/admin2.php");
           }
           else{
             $password_err = "The password is not valid.";
           }
         }
         else{
           $email_err = "The email is not valid";
         }

}

}
}

if(isset($_REQUEST['logOut'])){
// Initialize the session
session_start();

// Unset all of the session variables
$_SESSION = array();

// Destroy the session.
session_destroy();

// Redirect to login page
header("Location: ../view/AdminLogin.php");
exit;
}



?>
