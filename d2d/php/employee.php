<?php
require"../includes/common.php";
if((!isset($_SESSION['email'])) || !(($_SESSION['designation']!='admin') xor ($_SESSION['designation']!='employee')))
    header('location:login.php');
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Developing to Developed</title>	
		<link rel="stylesheet" type="text/css" href="../css/index.css">
		<link rel="icon" type="image/css" href="../img/d2dlogo.png" size="16*16">
           Latest compiled and minified CSS 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        jQuery library
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        Latest compiled and minified JavaScript
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
<body>
	<?php include "../includes/header.php";?>
	<br/><br/><br/><br/>
<div class="container">
	<div class="jumbotron">
		<center><h2>EMPLOYEE</h2></center>
	</div>
	<div class="row">
		<div class="col-md-offset-2 col-md-4 col-sm-6">
			<div class="thumbnail">
				<div class="caption">
					<center><h3>Register Customer</h3><br/>
						<p><a href="registerCustomer.php" role="button" class="btn btn-primary btn-block"><span class = "glyphicon glyphicon-plus-sign"> Register</a></p> 
					</center>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-6">
			<div class="thumbnail">
				<div class="caption">
					<center><h3>View Schemes Or Fill Form</h3><br/>
						<p><a href="selectCS.php" role="button" class="btn btn-primary btn-block"><span class = "glyphicon glyphicon-search"> View | <span class = "glyphicon glyphicon-pencil">  Fill</a></p> 
					</center>
				</div>	
			</div>
		</div>
	 </div>
	<div class="row">
	    <div class="col-md-offset-2 col-md-4 col-sm-6">
			<div class="thumbnail">
				<div class="caption">
					<center><h3>Suggest New Schemes</h3><br/>
						<p><a href="suggestSchemes.php" role="button" class="btn btn-primary btn-block"><span class = "glyphicon glyphicon-pushpin"> Suggest</a></p> 
					</center>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-6">
			<div class="thumbnail">
				<div class="caption">
					<center><h3>View Customers</h3><br/>
						<p><a href="viewRegCustomer.php" role="button" class="btn btn-primary btn-block"><span class = "glyphicon glyphicon-search"> View</a></p> 
					</center>
				</div>	
			</div>
		</div>
    </div><br/><br/><br/>
</div>
	<?php include "../includes/footer.php"; ?>
</body>
</html>