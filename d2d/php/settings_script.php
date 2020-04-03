<?php
require"../includes/common.php";
if(!isset($_SESSION['email']))
header('location:post_login.php');
$srno=$_SESSION['srno'];
echo $srno;
$pass=$_POST['password'];
echo "pass: ".$pass;
$pass0=md5($pass);
$pass1=$_POST['newpassword1'];
$pass2=$_POST['newpassword2'];
echo "pass1 and pass2: ".$pass2;
$sq="select * from user where srno='$srno' and password='$pass0'";
$sqr=mysqli_query($con,$sq);
if($pass=="")
	echo"You kept password field empty!!!";
elseif(!mysqli_num_rows($sqr))
	echo"You have entered wrong password!!!";
elseif ($pass1!=$pass2) 
 	echo "You didn't re-entered new password correctly!!!";
elseif(!strlen($pass1)>6)
	echo "Password should have at-least 6 characters!!!";
elseif(mysqli_num_rows($sqr)){
$pass1=md5($pass1);
echo "encrypted pwd: ".$pass1;
// $cp="UPDATE user SET password` = '$pass1' WHERE srno = '$srno'";
$cp="UPDATE `user` SET `password` = $pass1 WHERE `user`.`srno` = $srno;";
$cpr=mysqli_query($con,$cp);
//header('location:post_login.php');
}
?>