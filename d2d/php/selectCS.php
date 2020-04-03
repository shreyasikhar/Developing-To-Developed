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
           
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
<body>
	<?php include "../includes/header.php";?>
	    <div class="container" >
		<div class="row">
			<div class="cont col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-xs-12">
				<div class="panel panel-primary">
					<div class="panel-heading"><center>SELECT CUSTOMER SEGMENT</center></div>
					<div class="panel-body">
						<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	  						<div class ="form-group form-control">
								<label >Select Segment : </label>
								<select name="type">
	    							<option value="farmer">Farmer</option>
	    							<option value="seniorCitizen">Senior Citizen</option>
	    						</select>	
	  						</div>
	  						<center><button type="submit" class="btn btn-block btn-primary">Submit</button></center>
						</form>
					</div>
				</div>
			</div>
		</div>
		</div>
    <?php include "../includes/footer.php"; ?>
</body>
</html>	
<?php
$type = "";  
if ($_SERVER["REQUEST_METHOD"] == "POST")
{   
    $type = $_POST['type'];
    $sq = "select * from scheme where type='$type'";
    $sqr = mysqli_query($con, $sq) or die(mysqli_error($con));
    $count=0;
    if(!mysqli_num_rows($sqr))
    {
?> 	
        <div class="alert alert-warning">NO entries Yet!!!.</div>
<?php 
    }
    else
    { 
?>
	<div class="row">
		<div class="container col-xs-12">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Sr. No.</th>
						<th>Scheme Name</th>
						<th>Eligibility</th>
						<th>Type</th>
						<th>Category</th>
						<th>Documents</th>
						<th>Validity</th>
						<th>benefit</th>
						<th>Benefit Form</th>
						<th>Weblink </th>
					</tr>
				</thead>
				<tbody>
<?php while($row=mysqli_fetch_array($sqr)) 
      { 
?>
			<tr>
				<td><?php $count=$count+1; echo$count; ?></td>
				<td><?php echo$row['name'];?></td>
				<td><?php echo$row['eligibility'];?></td>
				<td><?php if($row['type'] == "farmer") echo "Farmer"; else if($row['type'] == "seniorCitizen") echo "Senior Citizen"; ?></td>
				<td><?php echo$row['category'];?></td>
				<td><?php echo$row['documents'];?></td>
				<td><?php echo$row['validity'];?></td>
				<td><?php echo$row['benefit'];?></td>
				<td><?php echo$row['benefit_form'];?></td>
				<td><a href='<?php echo$row['weblink'];?>' target="_blank" class='text-info'> <?php echo $row['weblink']; ?></a></td>
			</tr>
<?php 
       }
}       
?>
				</tbody>
			</table>
			</div>
		</div><br/><br/><br/>
<?php
}
?>
