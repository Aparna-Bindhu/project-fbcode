<!DOCTYPE html>
<html>
<head>
	<style>
    #logo{
    	border:1px solid black;background-color: black;color: brown;background-repeat: none; font-weight:bold;padding-top: 1%;padding-bottom: 1%;padding-right:0.5%;margin-top: 0%; 
    }
	</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<title>Ta-To</title>
</head>
<body style="background-color: brown">
<h3><span id="logo">Ta-To Plus</span></h3>
<marquee align="center" style="color: #ccc;font-weight: bold;font-size: 35px;"><span style="font-style: italic;font-family: sans-serif;"> WELCOME TO</span> Ta-T0 Plus</marquee>
<!--<img src="http://localhost/project-fb/assets/startbootstrap-new-age-gh-pages/img1/tato1.jpg" width="100" height="150"> -->
  <div class="container">
   <div class="row" style="margin-right: 30%;margin-left: 30%;margin-top:5%;">
	<div class="col-xs-12" style="border:2px solid black;padding-bottom: 5%;padding-top: 5%;border-radius: 3%; background-color:black;" >
	<p align="center" style="color: white;font-size: 30px;padding-top: 2%;">Create new account</p>
	<div style="color: red;">	
	 <?php if(!empty($error)){ echo $error;}?>
     <?php if(!empty($message)){ echo $message;}?>
     <?php if(!empty(validation_errors())){echo validation_errors();}?>
   </div>
	<form method="post" action="talog1" >

	 	<div class="row">
	 	<div class="form-group" style="padding-top: 3%">
	 	<div>
	   <label style="font-size: 20px;font-family: inherit;color:white;padding-left: 5%;">Name:</label><span style="float: right;padding-right: 10%;"><input type="text" name="name" placeholder="fullname"></span>
	</div>
	<div>
	   <label style="font-size: 20px;font-family: inherit;color:white;padding-left: 5%;">Email:</label><span style="float: right;padding-right: 10%;"><input type="text" name="email" placeholder="email"></span>
	</div>
	<div>
	   <label style="font-size: 20px;font-family: inherit;color:white;padding-left: 5%;">Date of Birth:</label><span style="float: right;padding-right: 10%;"><input type="text" name="date" placeholder="DD/MM/YYYY"></span>
	</div>

	   <label style="font-size: 20px;font-family: inherit;color: white;padding-left: 5%;">Nationality:</label><span style="float: right;padding-right: 10%;"><input type="text" name="nationality" value="India"></span>
	   <div>
	   <label style="font-size: 20px;font-family: inherit;color:white;padding-left: 5%;">Password:</label><span style="float: right;padding-right: 10%;"><input type="password" name="password" placeholder="password"></span>
	</div>
	  </div>
	   </div>
	   <div style="font-size: 16px;" align="center"><input type="submit" name="submit" value="submit">
	   	</div>
	   
     </form>
	</div>
   </div>
  </div>
</body>
</html>