<?php
    require '../includes/common.php';
    if(isset($_SESSION['email']))
    {
        if($_SESSION['designation'] == "admin")
            header('location:admin.php');
        else if($_SESSION['designation'] == "dataManipulator")
            header('location:dataManipulator.php');
        else if($_SESSION['designation'] == "employee")
            header('location:employee.php');
    }
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Developing to Developed</title>	
   <!--        Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link rel="stylesheet" type="text/css" href="../css/index.css">
        <link rel="icon" type="image/css" href="d2d/img/d2dlogo.png" size="16*16">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&display=swap">
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="google-site-verification" content="9yHMpL8dY3UeZg3LCsDej8bnwNmJVhhS872erVj140A" />
	</head>
	<body>
		<?php
			include '../includes/header.php';
		?>	
		<div id="banner_image">
			<div class="container">
				<center>
					<div id="banner_content">
					<h1>Developing To Developed</h1>
				</br>
				
					The Government of India ensures to uplift every citizen by launching numerous schemes. Due to lack of awareness or time, people don't even approach to avail the benefits. We are creating a platform to bring the statistics of launching and availing neutral.
					
					</div>
				</center>
			</div>
		</div>
		<?php
			include '../includes/footer.php';
		?>	
	</body>
</html>
