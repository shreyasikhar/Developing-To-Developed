<?php
	require '../includes/common.php';
	//if(isset($_SESSION['email']))
	    //header('location:merit_list.php');
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Developing to Developed</title>
		<link rel="stylesheet" type="text/css" href="../css/index.css"
		<!-- Latest compiled and minified css -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		
		<!-- jQuery Library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		
		<!-- Latest compiled and minified javascript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="icon" type="image/css" href="../img/d2dlogo.png" size="16*16">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&display=swap">
        <style>
        * {
            font-family: 'Roboto', sans-serif;
        }    
        </style>
	</head>
	<body> 
		<?php include "../includes/header.php";?>
		<div class="cont container" >
		<div class="row">
			<div class="cont col-md-4 col-md-offset-4 col-xs-8 col-xs-offset-2">
				<div class="panel panel-primary">
					<div class="panel-heading"><center>Forgot Password</center></div>
					<div class="panel-body">
						<form method="POST" action="forgot_script.php">
							<div class="form-group ">
								<input type="email" class="form-control" name="email" id="email" placeholder="Enter registered email-id">
							</div>	
							<center><button type="submit" class="btn btn-block btn-primary">Send Link</button></center>
						</form>
					</div>
				</div>
			</div>
		</div>
		</div>
		<?php include"../includes/footer.php";?>
	</body>
</html>

