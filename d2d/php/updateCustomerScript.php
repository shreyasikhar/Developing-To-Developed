<?php
	require '../includes/common.php';
    if((!isset($_SESSION['email'])) || !(($_SESSION['designation'] != 'admin') xor ($_SESSION['designation'] != 'dataManipulator')))
        header('location:login.php');
        
        
    //**********validation******************
	$nameErr = $dobErr = $incomeErr = $districtErr = $emailErr = $contactErr = $religionErr = "";
    $name = $dob = $income = $religion =$category = $customerSegment = $gender = $district = $email = $contact = "";
    // if ($_SERVER["REQUEST_METHOD"] !== "POST") 
    // {
    //     $_SESSION['srno'] = $_GET['srno'];
    //     echo $_SESSION['srno']."_____________________________________________";
    // }
    //$srno = $_SESSION["srno"];
    $sq="select * from customer where srno='$srno'";
    $sqr=mysqli_query($con, $sq) or die(mysqli_error($con));
    $row=mysqli_fetch_array($sqr);
    $flag=0;
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $flag=1;
        if (empty($_POST["name"])) 
        {
            $nameErr = "* Name is required";
            $flag=0;
        } 
        else 
        {
            $name = $_POST["name"];
        }
        if (empty($_POST["dob"])) 
        {
            $dobErr = "* Date of Birth is required";
            $flag=0;
        } 
        else 
        {
            $dob = $_POST["dob"];
        }
        if (empty($_POST["income"])) 
        {
            $incomeErr = "* Income is required";
            $flag=0;
        } 
        else 
        {
            $income = $_POST["income"];
        }
        if (empty($_POST["religion"])) 
        {
            $religionErr = "* Religion is required";
            $flag=0;
        } 
        else 
        {
            $religion = $_POST["religion"];
        }
        $category = $_POST["category"];
        $customerSegment = $_POST["customerSegment"];
        $gender = $_POST["gender"];
        if (empty($_POST["district"])) 
        {
            $districtErr = "* District is required";
            $flag=0;
        } 
        else 
        {
            $district = $_POST["district"];
        }
        if (empty($_POST["email"])) 
        {
            $emailErr = "* Email is required";
            $flag=0;
        } 
        else 
        {
            $email = $_POST["email"];
        }
        if (empty($_POST["contact"])) 
        {
            $contactErr = "* Contact is required";
            $flag=0;
        } 
        else 
        {
            $contact = $_POST["contact"];
        }
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
		<div class="container" >
		<div class="row">
			<div class="cont col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-xs-12">
				<div class="panel panel-primary">
					<div class="panel-heading"><center>Update Registered Customer Details</center></div>
					<div class="panel-body">
						<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
							<div class="form-group">
								<input type="text" class="form-control" name="name" id="name" value="<?php echo $row['name']; ?>">
								<span class="error"><?php echo $nameErr;?></span>
							</div>
							<div class = "form-control"><div class="form-group">
								<label>Enter Date of Birth : </label>
								<input type="date"  name="dob" id="dob" value="<?php echo $row['dob']; ?>">
								<span class="error"><?php echo $dobErr;?></span>
							</div></div><br/>
							<div class="form-group">
								<input type="text" class="form-control" name="income" id="income" value="<?php echo $row['income']; ?>">
								<span class="error"><?php echo $incomeErr;?></span>
							</div>
	  				        <div class="form-group">
								<input type="text" class="form-control" name="religion" id="religion" value="<?php echo $row['religion']; ?>">
								<span class="error"><?php echo $religionErr;?></span>
							</div>
	  						<div class ="form-group form-control">
								<label >Select Category : </label>
								<select name="category">
	    							<option value="OPEN">OPEN</option>
	    							<option value="OBC">OBC</option>
	    							<option value="SC">SC</option>
	    							<option value="ST">ST</option>
	    							<option value="NT">NT</option>
	    							<option value="VJ">VJ</option>
	  							</select>
	  						</div>
	  						<div class ="form-group form-control">
								<label >Select Segment : </label>
								<select name="customerSegment">
	    							<option value="Farmer">Farmer</option>
	    							<option value="seniorCitizen">Senior Citizen</option>
	    						</select>	
	  						</div>
	  						<div class ="form-group form-control">
								<label >Select Gender : </label>
								<select name="gender">
	    							<option value="Male">Male</option>
	    							<option value="Female">Female</option>
	    							<option value="Other">Other</option>
	  							</select>
	  						</div>
	  						<div class="form-group">
								<input type="text" class="form-control" name="district" id="district" value="<?php echo $row['district']; ?>">
								<span class="error"><?php echo $districtErr;?></span>
							</div>
							<div class="form-group">
								<input type="email" class="form-control" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" value="<?php echo $row['email']; ?>">
								<span class="error"><?php echo $emailErr;?></span>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="contact" id="contact" pattern="(7|8|9)\d{9}" value="<?php echo $row['contact']; ?>">
								<span class="error"><?php echo $contactErr;?></span>
							</div>
							<center><button type="submit" class="btn btn-block btn-primary">Register</button></center>
						</form>
					</div>
				</div>
			</div>
		</div>
		<br>
		<br>
		</div>
		<?php include "../includes/footer.php";?>
	</body>
</html>
<?php
    $name=mysqli_real_escape_string($con, $name);
	$dob=mysqli_real_escape_string($con, $dob);
	$income=mysqli_real_escape_string($con, $income);
	$religion=mysqli_real_escape_string($con, $religion);
	$category=mysqli_real_escape_string($con, $category);
	$customerSegment=mysqli_real_escape_string($con, $customerSegment);
	$gender=mysqli_real_escape_string($con, $gender);
	$district=mysqli_real_escape_string($con, $district);
	$email=mysqli_real_escape_string($con, $email);
	$contact=mysqli_real_escape_string($con, $contact);
	if($flag)
	{
	  $uq="update customer set name='$name', dob='$dob', income='$income', religion='$religion', category='$category', customerSegment='$customerSegment', gender='$gender', district='$district',email='$email', contact='$contact' where srno='$srno'";
	  $uqr=mysqli_query($con, $uq) or die(mysqli_error($con));
	  header('location:viewRegCustomer.php');
	}
?>