<?php
	require"../includes/common.php";
    if((!isset($_SESSION['email'])) || !(($_SESSION['designation'] != 'admin') xor ($_SESSION['designation'] != 'dataManipulator')))
    header('location:login.php');
    
    //**********validation******************
	$nameErr = $eligibilityErr = $categoryErr = $documentsErr = $validityErr = $benefitErr = $benefit_formErr = "";
    $name = $eligibility = $type = $category = $documents = $validity = $benefit = $benefit_form = $weblink = "";
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
        if (empty($_POST["eligibility"])) 
        {
            $eligibilityErr = "* Eligibility is required";
            $flag=0;
        } 
        else 
        {
            $eligibility = $_POST["eligibility"];
        }
        $type=$_POST["type"];
         if (empty($_POST["category"])) 
        {
            $categoryErr = "* Category is required";
            $flag=0;
        } 
        else 
        {
            $category = $_POST["category"];
        }
        if (empty($_POST["documents"])) 
        {
            $documentsErr = "* Documents is required";
            $flag=0;
        } 
        else 
        {
            $documents = $_POST["documents"];
        }
        if (empty($_POST["validity"])) 
        {
            $validityErr = "* Validity is required";
            $flag=0;
        } 
        else 
        {
            $validity = $_POST["validity"];
        }
        if (empty($_POST["benefit"])) 
        {
            $benefitErr = "* Benefit is required";
            $flag=0;
        } 
        else 
        {
            $benefit = $_POST["benefit"];
        }
        if (empty($_POST["benefit_form"])) 
        {
            $benefit_formErr = "* Form of Benefit is required";
            $flag=0;
        } 
        else 
        {
            $benefit_form = $_POST["benefit_form"];
        }
        
        $weblink=$_POST["weblink"];
    }  
    
    $name=mysqli_real_escape_string($con, $name);
    $eligibility=mysqli_real_escape_string($con, $eligibility);
    $type=mysqli_real_escape_string($con, $type);
    $category=mysqli_real_escape_string($con, $category);
    $documents=mysqli_real_escape_string($con, $documents);
    $validity=mysqli_real_escape_string($con, $validity);
    $benefit=mysqli_real_escape_string($con, $benefit);
    $benefit_form=mysqli_real_escape_string($con, $benefit_form);
    $weblink=mysqli_real_escape_string($con, $weblink);
    if($flag)
	{
	    $uniqueId = uniqid();
    	$sq1="insert into scheme(uniqid, name, eligibility, type, category, documents, validity, benefit, benefit_form, weblink) values ('$uniqueId', '$name','$eligibility','$type','$category', '$documents', '$validity', '$benefit', '$benefit_form', '$weblink')";
    	$sqr1=mysqli_query($con, $sq1) or die(mysqli_error($con));
    	header('location:../../index.php');
	}
    
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Developing To Developed</title>
		<link rel="stylesheet" type="text/css" href="../css/index.css">
		<!-- Latest compiled and minified css -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="icon" type="image/css" href="../img/d2dlogo.png"> 
		
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
					<div class="panel-heading"><center>Insert New Scheme</center></div>
					<div class="panel-body">
						<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
							<div class="form-group">
								<input type="text" class="form-control" name="name" id="name" placeholder="Enter Scheme Name">
								<span class="error"><?php echo $nameErr;?></span>
							</div>
							<div class="form-group">
							    <input type="textarea" class="form-control" name="eligibility" id="eligibility" placeholder="Enter Eligibility Criteria">
							    <span class="error"><?php echo $eligibilityErr;?></span>
							</div>
								<div class ="form-group form-control">
								<label >Select Type</label>
								<select name="type">
	    							<option value="farmer">Farmer</option>
	    							<option value="seniorCitizen">Senior Citizen</option>
	  							</select>
	  						</div>
	  						<div class="form-group">
								<input type="textarea" class="form-control" name="category" id="category" placeholder="Enter Category">
							    <span class="error"><?php echo $categoryErr;?></span>
							</div>	
							<div class="form-group">
								<input type="textarea" class="form-control" name="documents" id="documents" placeholder="Enter Required Documents">
							    <span class="error"><?php echo $documentsErr;?></span>
							</div>	
							<div class="form-group">
								<input type="textarea" class="form-control" name="validity" id="validity" placeholder="Enter Validity of Schemes">
								<span class="error"><?php echo $validityErr;?></span>
							</div>
							<div class="form-group">
								<input type="textarea" class="form-control" name="benefit" id="benefit" placeholder="Enter Benefits of Schemes">
								<span class="error"><?php echo $benefitErr;?></span>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="benefit_form" id="benefit_form" placeholder="Enter Form of Benefit">
								<span class="error"><?php echo $benefit_formErr;?></span>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="weblink" id="weblink" placeholder="Enter Website Link">
							</div>
							<center><button type="submit" class="btn btn-block btn-primary">Submit</button></center>
						</form>
					</div>
				</div><br/><br/>
			</div>
		</div>
		</div>
		<?php include "../includes/footer.php";?>
	</body>
</html>
