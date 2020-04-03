<?php
require"../includes/common.php";
if((!isset($_SESSION['email'])) || ($_SESSION['designation']!='admin'))
    header('location:login.php');
?>	
<!DOCTYPE HTML>
<html>
	<head>
		<title>Developing to Developed</title>	
		<link rel="stylesheet" type="text/css" href="../css/index.css">
		<link rel="icon" type="image/css" href="../img/d2dlogo.png" size="16*16">
   <!--        Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
<body>
	<?php include "../includes/header.php";?>
	<br/><br/><br/><br/>
<div class="container">
	<div class="jumbotron">
		<center><h2>ADMIN</h2></center>
	</div>
	<div class="row">
		<div class="col-md-offset-2 col-md-4 col-sm-6">
			<div class="thumbnail">
				<div class="caption">
					<center><h3>Add New Account</h3><br/>
						<p><a href="addAccount.php" role="button" class="btn btn-primary btn-block"><span class = "glyphicon glyphicon-plus-sign"> Add</a></p> 
					</center>
				</div>	
			</div>
		</div>
		<div class="col-md-4 col-sm-6">
			<div class="thumbnail">
				<div class="caption">
					<center><h3>Delete Account</h3><br/>
						<p><a href="deleteAccount.php" role="button" class="btn btn-primary btn-block"><span class = "glyphicon glyphicon-trash"> Delete</a></p> 
					</center>
				</div>	
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-offset-2 col-md-4 col-sm-6">
			<div class="thumbnail">
				<div class="caption">
					<center><h3>Work as Employee</h3><br/>
						<p><a href="employee.php" role="button" class="btn btn-primary btn-block"><span class = "glyphicon glyphicon-new-window"> Work</a></p> 
					</center>
				</div>	
			</div>
		</div>
		<div class="col-md-4 col-sm-6">
			<div class="thumbnail">
				<div class="caption">
					<center><h3>Work as Manipulator</h3><br/>
						<p><a href="dataManipulator.php" role="button" class="btn btn-primary btn-block"><span class = "glyphicon glyphicon-new-window"> Work</a></p> 
					</center>
				</div>	
			</div>
		</div>
	</div><br/><br/><br/>
</div>
	<?php include "../includes/footer.php"; ?>
</body>
</html>