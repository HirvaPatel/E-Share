<!DOCTYPE html>
<html>
<head>
<title>Knowledge Sharing Platform</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body id="top">
<?php
include_once 'dbconnect.php';
    session_start();
    mysqli_select_db($con,"books") or die(mysql_error());
    if(isset($_SESSION['usr_id'])){
      $buyerid=$_SESSION['usr_id'];
$sellerid=$_GET['seller'];
$bid=$_GET['bid'];
if(mysqli_query($con, "INSERT INTO confirm(buyer_id,seller_id,bid) VALUES('" . $buyerid . "', '" . $sellerid . "','" .$bid ."')")) {

header("Location:index.php");
  } else {
      $errormsg = "Error in requesting...Please try again later!";
  }}
  else{
    echo '<script type="text/javascript">
        alert("Need to login before requesting any book.");
        window.location="login.php";
    </script>';
  }
 ?>

</body></html>
