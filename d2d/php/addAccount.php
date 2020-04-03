<?php
	require '../includes/common.php';
    if(!isset($_SESSION["email"]) || $_SESSION["designation"] != "admin")
        header("location:login.php");
        
        
    //**********validation******************
	$nameErr = $dobErr = $emailErr = $contactErr = $passwordErr = "";
    $name = $dob = $gender = $designation =$email = $contact = $password = "";
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
        
        $gender=$_POST["gender"];
        $designation=$_POST["designation"];
  
        if (empty($_POST["dob"])) 
        {
            $dobErr = nl2br("\n* Date of Birth is required\n");
            $flag=0;
        }  
        else 
        {
            $dob = $_POST["dob"];
        }
  
        if (empty($_POST["email"])) 
        {
            $emailErr="* Email is required";
            $flag=0;
        }
        else if(regEmail())
        {
           $emailErr = "* Email is registered";
        }
        else 
        {
            $email = $_POST["email"];
        }
  
        if (empty($_POST["contact"]) && strlen($_POST["contact"])!=10) 
        {
            $contactErr = "* Contact is required with 10 character";
            $flag=0;
        } 
        else 
        {
            $contact = $_POST["contact"];
        }
  
        if (empty($_POST["password"])) 
        {
            $passwordErr = "* Password is required";
            $flag=0;
        } 
        else 
        {
            $password = md5($_POST["password"]);
        }
    }
    
    function regEmail()
    {
        $email = $GLOBALS["email"];
        $con = $GLOBALS["con"];
        $sq="select * from user where email='$email'";
	    $sqr=mysqli_query($con, $sq) or die(mysqli_error($con));
	    if(mysqli_num_rows($sqr) > 0)
	        return 1;       
    }    
	$name=mysqli_real_escape_string($con, $name);
	$dob=mysqli_real_escape_string($con, $dob);
	$gender=mysqli_real_escape_string($con, $gender);
	$designation=mysqli_real_escape_string($con, $designation);
	$email=mysqli_real_escape_string($con, $email);
	$contact=mysqli_real_escape_string($con, $contact);
	$password=mysqli_real_escape_string($con, $password);
	$sq1 = "select * from user where email='$email'";
    $sqr1 = mysqli_query($con, $sq1);
    if(mysqli_num_rows($sqr1))
    {
        $emailErr="* Your email is already registered";
        $flag = 0;
    }
	if($flag)
	{
    	$sq1="insert into user(name, dob, gender, designation, email, contact, password) values ('$name', '$dob', '$gender', '$designation', '$email', '$contact', '$password')";
    	$sqr1=mysqli_query($con, $sq1) or die(mysqli_error($con));
    	header('location:admin.php');
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
					<div class="panel-heading"><center>ADD ACCOUNT</center></div>
					<div class="panel-body">
						<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
							<div class="form-group">
								<input type="text" class="form-control" name="name" id="name" placeholder="Enter Full Name">
								<span class="error"><?php echo $nameErr;?></span>
							</div>
							<div class = "form-control"><div class="form-group">
								<label>Enter Date of Birth : </label>
								<input type="date"  name="dob" id="dob"  placeholder="Enter Date Of Birth">
								<span class="error"><?php echo $dobErr;?></span>
							</div></div><br/>
							<div class ="form-group form-control">
								<label >Select Gender : </label>
								<select name="gender">
	    							<option value="Male">Male</option>
	    							<option value="Female">Female</option>
	    							<option value="Other">Other</option>
	  							</select>
	  							<span class="error"></span>
	  						</div>
	  						<div class ="form-group form-control">
								<label >Select Designation : </label>
								<select name="designation">
	    							<option value="employee">Employee</option>
	    							<option value="dataManipulator">Data Manipulator</option>
	  							</select>
	  							<span class="error"></span>
	  						</div>
							<div class="form-group">
								<input type="email" class="form-control" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Enter Email-ID">
								<span class="error"><?php echo $emailErr;?></span>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="contact" id="contact" pattern="(7|8|9)\d{9}" placeholder="Enter Contact Number">
								<span class="error"><?php echo $contactErr;?></span>
							</div>
							<div class="form-group">
								<input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="form-control" name="password" id="password" placeholder="Enter Password">
								<span class="error"><?php echo $passwordErr;?></span>
							</div>
							<center><button type="submit" class="btn btn-block btn-primary">Add</button></center>
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
    
	//$_SESSION["email"]=$email;
	//$_SESSION["srno"]=mysqli_insert_id($con);
	//$_SESSION["designation"]=$designation;
	//if($designation=="admin")
	    //header("location:admin.php");
    //else if($designation=="dataManipulator")
        //header("location:dataManipulator.php");
    //else
        //header("location:employee.php");
	
?>
