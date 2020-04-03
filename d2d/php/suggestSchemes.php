<?php
	require '../includes/common.php';
	if((!isset($_SESSION['email'])) || !(($_SESSION['designation']!='admin') xor ($_SESSION['designation']!='employee')))
        header('location:login.php');
    //**********validation******************
	$idErr = $schemeNameErr = "";
    $suggestorId = $schemeName = $description = "";
    $flag=0;
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $flag=1;
        if (empty($_POST["suggestorId"])) 
        {
            $idErr = "* Customer ID / Employee ID is required";
            $flag=0;
        } 
        else 
        {
            $suggestorId = $_POST["suggestorId"];
        }
        if (empty($_POST["schemeName"])) 
        {
            $schemeNameErr = "* Scheme Name is required";
            $flag=0;
        } 
        else 
        {
            $schemeName = $_POST["schemeName"];
        }
        $description = $_POST["description"];
    }
    
    $suggestorId = mysqli_real_escape_string($con, $suggestorId);
    $schemeName = mysqli_real_escape_string($con, $schemeName);
    $description = mysqli_real_escape_string($con, $description);
    if($flag)
    {
        $iq="insert into suggestion(suggestorId, schemeName, description) values ('$suggestorId', '$schemeName', '$description')";
    	$iqr=mysqli_query($con, $iq) or die(mysqli_error($con));
    	header('location:../../index.php');
    }
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Developing To Developed</title>
		<link rel="stylesheet" type="text/css" href="../css/index.css">
		<link rel="icon" type="image/css" href="../img/d2dlogo.png">
		<!-- Latest compiled and minified css -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		
		<!-- jQuery Library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		
		<!-- Latest compiled and minified javascript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body> 
		<?php include "../includes/header.php";?>
		<div class="cont container" >
		<div class="row">
			<div class="cont col-md-4 col-md-offset-4 col-xs-12">
				<div class="panel panel-primary">
					<div class="panel-heading"><center>Suggest New Schemes</center></div>
					<div class="panel-body">
						<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
							<div class="form-group">
								<input type="text" class="form-control" name="suggestorId" id="suggestorId" placeholder="Enter Customer ID / Employee ID">
								<span class="error"><?php echo $idErr;?></span>
							</div>
							<div class="form-group">
								<input type="textarea" class="form-control" name="schemeName" id="schemeName" placeholder="Enter Scheme Name">
								<span class="error"><?php echo $schemeNameErr;?></span>
							</div>
							<div class="form-group">
								<input type="textarea" class="form-control" name="description" id="description" placeholder="Enter Description">
							</div>
							<center><button type="submit" class="btn btn-block btn-primary">Submit</button></center>
						</form>
					</div>
				</div>
			</div>
		</div>
		</div>
		<?php include "../includes/footer.php";?>
	</body>
</html>
