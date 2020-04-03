<?php
  include("code.php");
  if(!isset($_GET["code"]))
   {
     exit("Can't Find Page" );
   }
   $code = $_GET["code"];
   $getemailquery = mysqli_query($con,"SELECT email FROM forgotpassword WHERE code = '$code'");
   if(mysqli_num_rows($getemailquery) == 0)
   {
           exit("Can't Find Page");
   }
  if(isset($_POST["password"]))
  {
     $pass = $_POST["password"];
     $pass0 = md5($pass);
     $pass1 = $_POST["password1"];
     

    if($pass=="")
	  echo "You have kept password field empty!!!";
	else if(!mysqli_num_rows($getemailquery))
		echo "You have entered wrong password!!!";
	else if($pass!=$pass1)
		echo "Passwords do not match!!!";
	else if(strlen($pass1) < 8 )
		echo "Password should have atleast 8 characters!!!";
	else if(mysqli_num_rows($getemailquery))
    {
        $pass = md5($pass);
        $row = mysqli_fetch_array($getemailquery);
        $email = $row["email"];
        $query = mysqli_query($con,"UPDATE user SET password='$pass' WHERE email='$email'");
    }
    if($query)
    {
        $query= mysqli_query($con,"DELETE FROM forgotpassword WHERE code='$code'");
        exit("Password updated");
    }
    else
    {
        exit("Something went Wrong");
    }
  }

?>


<!DOCTYPE html>
<html>
<head>
<title>Developing To Developed</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/index.css">
  <link rel="icon" type="image/css" href="../img/d2dlogo.png">
</head>
<body>
<?php
	include '../includes/header.php';
?>
	<!--<div class="container" style="padding-top:70px">-->
	
		
	<!--	<center><h2>Change Password</h2></center>-->
	<!--		<div class="row ">-->
 <!--                             <div class="col-md-4 col-sm-offset-4">-->
				
					
	<!--				<form  method="POST">-->
				
	<!--			<div class="form-group">-->
	<!--				<input type="text" class="form-control" placeholder="New Password" name="password" id="password">-->
	<!--			</div>-->
	<!--			<div class="form-group">-->
	<!--				<input type="text" class="form-control" placeholder="Confirm Password" name="password1" id="password">-->
	<!--			</div>-->
					
			
	<!--						<center><button type="submit" class="btn btn-success">Change</button></center> -->
				
	<!--				</form>-->
	<!--			</div>-->
				
	<!--		</div>-->
			
	<!--	</div>-->
	<div class="cont container" >
		<div class="row">
			<div class="cont col-md-4 col-md-offset-4 col-xs-8 col-xs-offset-2">
				<div class="panel panel-primary">
					<div class="panel-heading"><center>Change Password</center></div>
					<div class="panel-body">
						<form method="POST" action="forgot_script.php">
							<div class="form-group ">
								<input type="text" class="form-control" name="password" id="password" placeholder="Enter New Password">
							</div>
							<div class="form-group ">
								<input type="text" class="form-control" name="password1" id="password1" placeholder="Re-Enter New Password">
							</div>	
							<center><button type="submit" class="btn btn-block btn-primary">Change</button></center>
						</form>
					</div>
				</div>
			</div>
		</div>
		</div>

<?php
	include '../includes/footer.php';
?>
</body>
</html>

