<?php require "../includes/common.php";
$srno=$_GET['srno'];
$dq="delete from user where srno='$srno'";
$dqr=mysqli_query($con,$dq);
header('location:deleteAccount.php');
?>