<?php
    include_once 'dbconnect.php';
    session_start();
    mysqli_select_db($con,"books") or die(mysql_error());

    $bid=$_GET['bid'];
    $q=mysqli_query($con, "DELETE FROM `confirm` WHERE bid=" . $bid);
    if($q){
      $q=mysqli_query($con, "DELETE FROM `book_details` WHERE bid=" . $bid );
          if($q)
           header("Location:self_profile.php");
          else
                $errormsg = "Error in confirming...Please try again later!";
    }
      else 
            $errormsg = "Error in confirming...Please try again later!";

 ?>
