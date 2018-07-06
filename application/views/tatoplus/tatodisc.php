<!DOCTYPE html>
<html>
<head>
	<style>
    #logo{
    	border:1px solid black;background-color: black;color: brown;background-repeat: none; font-weight:bold;padding-top: 1%;padding-bottom: 1%;padding-right:0.5%;margin-top: 0%; 
    }
	</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<title>Ta-TO</title>
</head>
<body style="background-color: brown">
	<div class="jumbotron text-center" style="background-color: black;"><h1 style="color:brown;">TA-TO PLUS</h1>
	<div style="float: right;padding-right: 3%;" ><a href="talogout"><button>Logout</button></a></div>
	
	</div>
	<div style="color: black;font-size: 20px;font-weight: bold;" align="center">
	Email:<?php echo $_SESSION['username'] ?><br>
	Password:<?php echo $_SESSION['password'] ?>
</div>
<img src="http://localhost/project-fb/assets/img1/tato1.jpg" width="200" height="200"><br><br>
<img src="http://localhost/project-fb/assets/img1/tato2.jpg" width="200" height="200">
</body>
</html>