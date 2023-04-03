<?php
session_start();
 $q1=$q2=$q3=$q4=0;

  if(isset($_POST['item1'])) {
    $q1= $_POST['q1'];
    if($q1>5){
      //Setting error message if quantity is greater than 5 , and redirecting page
      $_SESSION['uq1Err'] = "Limit for each item is 5";
      header("Location:hunealthy.php");
    }
  }
  if(isset($_POST['item2'])) {
    $q2= $_POST['q2'];
    if($q2>5){
      //Setting error message if quantity is greater than 5 , and redirecting page
      $_SESSION['uq2Err'] = "Limit for each item is 5";
      header("Location:unhealthy.php");
    }
  }
  if(isset($_POST['item3'])) {
    $q3= $_POST['q3'];
    if($q3>5){
      //Setting error message if quantity is greater than 5 , and redirecting page
      $_SESSION['uq3Err'] = "Limit for each item is 5";
      header("Location:hunealthy.php");
    }
  }
  if(isset($_POST['item4'])) {
    $q4= $_POST['q4'];
    if($q4>5){
      //Setting error message if quantity is greater than 5 , and redirecting page
      $_SESSION['uq4Err'] = "Limit for each item is 5";
      header("Location:unhealthy.php");
    }
  }
  $total= ($q1+$q2+$q3+$q4)*100;
  $_SESSION['total']= ($q1+$q2+$q3+$q4)*100;
  include "showcart.php";
  
?>




