<?php require "../includes/common.php";
$srno=$_GET['srno'];
$dq="delete from scheme where srno='$srno'";
$dqr=mysqli_query($con,$dq);
header('location:deleteScheme.php');
?>