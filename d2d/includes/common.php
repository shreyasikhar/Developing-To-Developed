<?php
$con=mysqli_connect("localhost","phpmyadmin","yayati23","D2D") or die(mysqli_error($con));	
session_start();
// if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 900))
// {
//     session_unset();     // unset $_SESSION variable for the run-time 
//     session_destroy();   // destroy session data in storage
// }
//$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
?>
