<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body style="background-color: brown">

 <div class="jumbotron text-center" style="background-color: black;"><h1 style="color:brown;">TA-TO PLUS</h1><br></div>
<h3 align="center" style="color: white;">change your password</h3> 
 <div class="container">
   <div class="row" style="margin-right: 35%;margin-left: 35%;">
	<div class="col-xs-12" align="center" style="border:2px solid black;padding-bottom: 5%;padding-top: 5%;border-radius: 3%; background-color:black;" >
		<div style="color: red">
			<?php if(!empty($error)){echo $error;}?>
    <?php if(!empty($message)){echo $message;}?>
		</div>

<form method="post" action="changepass" style="margin-top: 7%">
	<div class="row">
	 	<div class="form-group">
	 <label style="font-size: 20px;font-family: inherit;color: white;">
	Username:</label><span style="float: right;padding-right: 1%;"><input type="text" name="username" placeholder="Username"></span>
</div>
</div>
<!--<div class="row">
	 	<div class="form-group">
	  <label style="font-size: 20px;font-family: inherit;color: white;">
	Current<br> password:</label><span style="float: right;padding-right: 1%;"><input type="text" name="current" placeholder="current password"></span>
</div>
</div>-->
<div class="row">
	<div class="form-group">
	  <label style="font-size: 20px;font-family: inherit;color: white;">
	Password:</label><span style="float: right;padding-right: 1%;"><input type="password" name="password" placeholder="Password"></span>
</div>
</div>
	<div style="font-size: 16px;"><input type="submit" name="login" value="change password"></div>
</form>
<br><?php if(!empty($error)){echo $error;}?>
    <?php if(!empty($message)){echo $message;}?>
</body>
</html>