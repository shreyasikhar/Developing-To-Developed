<?php
require"../includes/common.php";
if((!isset($_SESSION['email'])) || !(($_SESSION['designation']!='admin') xor ($_SESSION['designation']!='dataManipulator')))
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
	<br/><br/><br/>
	<div class="container">
 	<?php
 $sq="select * from scheme order by srno DESC ";
 $sqr=mysqli_query($con,$sq);
 $count=0;
 ?>
 <div class="jumbotron">
		<center><h2>Update Scheme</h2></center>
	</div>	
 <?php
 if(!mysqli_num_rows($sqr))
 {
?> 	
<div class="alert alert-warning">
	No Entries Yet!!!.
</div>
<?php }else{ ?>
	
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
						<th>Action </th>
					</tr>
				</thead>
				<tbody>
<?php while($row=mysqli_fetch_array($sqr)) { ?>
					<tr>
						<td><?php $count=$count+1; echo$count; ?></td>
						<td><?php echo$row['name'];?></td>
						<td><?php echo$row['eligibility'];?></td>
						<td><?php if($row['type'] == "farmer") echo "Farmer"; else if($row['type'] == "seniorCitizen") echo "Senior Citizen";?></td>
						<td><?php echo$row['category'];?></td>
						<td><?php echo$row['documents'];?></td>
						<td><?php echo$row['validity'];?></td>
						<td><?php echo$row['benefit'];?></td>
						<td><?php echo$row['benefit_form'];?></td>
						<td><a href='<?php echo$row['weblink'];?>' class='text-info' target='_blank'> <?php echo$row['weblink'];?></a></td>
						<td><a href='updateSchemeScript.php?srno=<?php echo $row['srno'];?>' class='text-primary'> Update</a></td>
					</tr>
<?php }?>
				</tbody>
			</table>
			</div>
		</div><br/><br/><br/>
	<?php }?>
	</div>
				<?php include "../includes/footer.php"; ?>
</body>
</html>