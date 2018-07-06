<!DOCTYPE html>
<html>
<head>
	<style>

	</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<title>Ta-To</title>
</head>
<body style="background-color: brown">

 <div class="jumbotron text-center" style="line-height: 1%;background-color: black;"><h1 style="color:brown;">TA-TO PLUS</h1><br><span style="font-style: italic;font-size: 20px;color: gray;">New Idea Plus</span></div>
  <div class="container">
   <div class="row" style="margin-right: 35%;margin-left: 35%;">
	<div class="col-xs-12" align="center" style="border:2px solid black;padding-bottom: 5%;padding-top: 5%;border-radius: 3%; background-color:black;" >
	<div style="color: red;">	
	 <?php if(!empty($error)){ echo $error;}?>
     <?php if(!empty($message)){ echo $message;}?>
     <?php if(!empty(validation_errors())){echo validation_errors();}?>
   </div>
	 <form method="post" action="talog" style="margin-top: 7%;">
	 	<div class="row">
	 	<div class="form-group">
	   <span style="font-size: 20px;font-family: inherit;color: white;">Username:</span><input type="text" name="username" placeholder="Email address">
	   
	</div>
</div>

       <div class="row">
	 	<div class="form-group">
	  <span style="font-size: 20px;font-family: inherit;color: white;">Password:</span><input type="password" name="password" placeholder="password">
	  <div style="float:right;padding-right: 2%;">
	   	<a href="changepass">Forgot password?</a>
	   </div>
	  </div>
	   </div>
	   <div style="font-size: 16px;"><input type="submit" name="login" value="Login">
	   	</div>
	   <div style="float:right;">
	  	
	  	<a href="talog1">create new account</a>
	  </div>
     </form>
	</div>
   </div>
  </div>
</body>
</html>