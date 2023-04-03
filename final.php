<?php 
  session_start();
  //including class for backend validation.
  include "Forms.php";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $obj = new Forms();  //creating object of class
    $checkName = $obj->match($_POST['name']);
    $checkph = $obj->validate_no($_POST['phone']);

    //Name field validation
    if($_POST['name'] == "") {
      $_SESSION['nameErr'] = "Please enter name";
      header("Location:showcart.php");
    }
    else {
      if($checkName == 0) {
        $_SESSION['nameErr'] = "Only letters allowed";
        header("Location:showcart.php");
      }
    } 

    //Phone number field validation
    if($_POST['phone'] == "") {
      $_SESSION['phErr'] = "Please enter number.";
      header("Location:showcart.php");
    }
    else {
      if($checkph == 0) {
        $_SESSION['phErr'] = "Enter valid phone number";
        header("Location:showcart.php");
      }
    }

    //Email field validation.
    if($_POST['email'] == ""){
      $_SESSION['emailErr'] = "Please enter email id.";
      header("Location:showcart.php");
    }
    else {
      include "emailcheck.php";
        $check_obj = new EmailCheck($_POST['email']);
        $flag = $check_obj->check();
        /**
         * if $flag is set to 1 (i.e validation is successful) then only mail.php 
         * is included and the mail is sent.
         * else user is relocated to forgetPassword.php and error message is displayed.
         */
        if ($flag == TRUE) {
          $_SESSION['emailErr'] = "";
          $_SESSION['infoname'] = $_POST['name'];
          $_SESSION['infoemail'] = $_POST['email'];
          $_SESSION['infophone'] = $_POST['phone'];
          echo "Thank you for purchasing.";
          include "mail.php";
        }
        else {
          $_SESSION['emailErr'] = "Enter a valid email";
          header('Location: showcart.php');
        }
    }

  }
?>

