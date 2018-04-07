<?php
require_once '../model/Database_Access.php';
require_once '../model/Admin.php';
require_once "../model/AdminKey.php";
// Define variables and initialize with empty values
$emailSignUp= $password = $confirm_password = $admin_key ="";
$email_err = $password_err = $confirm_password_err = $admin_key_err ="";


// Processing form data when form is submitted
if(isset($_REQUEST["emailSignUp"])){

    // Validate email
    if(empty(trim($_REQUEST["emailSignUp"]))){
        $email_err = "Please enter a email.";
        header("Location: ../view/AdminLogin.php");
    } else{

        $admin = new Admin();
        $admin->Email_Address= htmlentities(trim($_REQUEST["emailSignUp"]));
        $admin_results= Database_Access::getInstance()->getAdminByEmail($admin);

        if($admin_results->rowCount() == 1){
          $email_err = "Email already exists";
          header("Location: ../view/AdminLogin.php");
        }
        else{
          $emailSignUp = htmlentities(trim($_REQUEST["emailSignUp"]));
        }
            }

    // Validate password
    if(empty(trim($_REQUEST['passwordSignUp']))){
        $password_err = "Please enter a password.";
        header("Location: ../view/AdminLogin.php");
    } elseif(strlen(trim($_REQUEST['passwordSignUp'])) < 6){
        $password_err = "Password must have atleast 6 characters.";
        header("Location: ../view/AdminLogin.php");
    } else{
        $password = htmlentities(trim($_REQUEST['password']));
    }

    // Validate confirm password
    if(empty(trim($_REQUEST["confirmPasswordSignUp"]))){
        $confirm_password_err = 'Please confirm password.';
        header("Location: ../view/AdminLogin.php");
    } else{
        $confirm_password = htmlentities(($_REQUEST['confirmPasswordSignUp']));
        if($password != $confirm_password){
            $confirm_password_err = 'Password did not match.';
            header("Location: ../view/AdminLogin.php");
        }
    }

    if(empty(trim($_REQUEST['adminkey']))){
        $admin_key_err = "Please enter the admin key.";
        header("Location: ../view/AdminLogin.php");
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
          header("Location: ../view/AdminLogin.php");

        }
    }
}
// admin register finishes.


// Define variables and initialize with empty values
$email = $password = "";
$email_login_err= $password_login_err = "";

// Processing form data when form is submitted
if(isset($_REQUEST["login-submit"])){

    // Check if email is empty
    if(empty(trim($_REQUEST["email"]))){
        $email_login_err = 'Please enter email.';
        header("Location: ../view/AdminLogin.php");
    }

    // Check if password is empty
    if(empty(trim($_REQUEST['password']))){
        $password_login_err = 'Please enter your password.';
        header("Location: ../view/AdminLogin.php");
    }

    // Validate credentials
    if(empty($email_login_err) && empty($password_login_err)){
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
             $password_login_err = "The password is not valid.";
             header("Location: ../view/AdminLogin.php");
           }
         }
         else{
           $email_login_err = "The email is not valid";
           header("Location: ../view/AdminLogin.php");
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
