<?php
  session_start();
  $q1=$q2=$q3=$q4=0;
  $_SESSION['total']=0;
  if(isset($_POST['item1'])) {
    $q1= $_POST['q1'];
    if($q1>5){
      //Setting error message if quantity is greater than 5 , and redirecting page
      $_SESSION['q1Err'] = "Limit for each item is 5";
      header("Location:healthy.php");
    }
  }
  if(isset($_POST['item2'])) {
    $q2= $_POST['q2'];
    if($q2>5){
      //Setting error message if quantity is greater than 5 , and redirecting page
      $_SESSION['q2Err'] = "Limit for each item is 5";
      header("Location:healthy.php");
    }
  }
  if(isset($_POST['item3'])) {
    $q3= $_POST['q3'];
    if($q3>5){
      //Setting error message if quantity is greater than 5 , and redirecting page
      $_SESSION['q3Err'] = "Limit for each item is 5";
      header("Location:healthy.php");
    }
  }
  if(isset($_POST['item4'])) {
    $q4= $_POST['q4'];
    if($q4>5){
      //Setting error message if quantity is greater than 5 , and redirecting page
      $_SESSION['q4Err'] = "Limit for each item is 5";
      header("Location:healthy.php");
    }
  }
  $_SESSION['total']= ($q1+$q2+$q3+$q4)*100;
  include "showcart.php";
?>




