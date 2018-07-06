<!DOCTYPE html>
<html lang="en">
 <head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
  <meta charset="utf-8">
  <title>login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link href="http://localhost/project-fb/facebook/assets/css/bootstrap.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link href="http://localhost/project-fb/facebook/assets/css/facebook.css" rel="stylesheet">
  <style>
  .for{
           color: #0e385f;
    font-size: 20px;
    font-weight: bold;
    line-height: 29px;
    margin-top: 40px;
    width: 450px;
    word-spacing: -1px;
}
   .facebook{
   	font-size: 30px;font-weight: bold;color: white;font-family:sans-serif;padding-left: 15%;padding-top:0%;}    
  </style>
 </head>
  <body style="background-color: #e9eaed;">
   <div class="container-fluid">
    <div class="row">
	 <div class=" col-xs-12 col-sm-12" id="main">
	  <div class="navbar navbar-blue navbar-static-top">
	  	<span class="facebook">facebook</span>
	  <form method="post" action="fbsigin"  style="float: right;margin-right: 25%;">

	  	<div>
	  	<label style="font-weight: normal;font-family: inherit;font-size: 12px;">Email or phone</label><br>
	  	<input type="text" name="email" style="padding:0% 0% 0% 0%; border-color: black;"><br>
	  
	  	<label style="font-weight: normal;font-family: inherit;font-size: 12px;">Password</label><br>
	    <input type="password" name="password" style="padding:0% 0% 0% 0%; border-color: black;">
	    <div style="color: #9cb4d8;font-weight: normal;font-family: inherit;font-size: 12px;">Forgotten account?</div>
	  		<input type="submit" name="sumit" value="Log In" class="btn btn-primary" style="border-radius:0%;color: white;padding: 0% 0% 0% 0%;margin-left: 30%;">
	  		<!-- <td><input style="border-color: #4267b2;background-color: #4267b2;color: white;" type="submit" name="login" value="Log In"></td> -->
	  	</div>
		 </form>
		</div>
		</div>
	   </div>
	
	 
	<div class="row" style="margin-top: 12%">
									  	<div class=" col-xs-6 col-sm-6">
									  		<p style="color: #0e385f;font-weight:bold;font-size:20px;padding-left: 12%;">Facebook helps you connect and share with the<br> people in your life.</p>
									  		<span style="margin-left: 12%;">
									  		<img src="http://localhost/project-fb/facebook/assets/img/face.png" width="537" height="195"></span></div>
<div class=" col-xs-6 col-sm-6">
<form class="form-group for" style="margin-left: 28%;">
	  <h3 align="center">Create new account</h3>
	  <div>
	   <span style="font-size: 18px;font-weight: bold;">Name:</span><input style="float: right;margin-right: 12%;" class=" input-sm" placeholder="Full Name" type="text" name="name">
	  </div><br>
	  <div>
	   <span style="font-size: 18px;font-weight: bold;">Email:</span><input style="float: right;margin-right: 12%;"  class=" input-sm" placeholder="Email Address" type="text" name="email">
	  </div><br>
	  <div>
	   <span style="font-size: 18px;font-weight: bold;margin-right: 13.5%;">Birthday:</span>
	    <select name="birthday" style="margin-right:1%;margin-left: 13%;font-size: 14px;">
          <option value="1">1</option><option value="2">2</option><option value="3">3</option>
          <option value="4">4</option><option value="5">5</option><option value="8">8</option>
          <option value="7">7</option><option value="8">8</option><option value="9">9</option>
          <option value="10">10</option><option value="11">11</option><option value="12">12</option>
          <option value="13">13</option><option value="14">14</option><option value="15">15</option>
          <option value="18">18</option><option value="17">17</option><option value="18">18</option>
          <option value="19">19</option><option value="20">20</option><option value="21">21</option>
          <option value="22">22</option><option value="23">23</option><option value="24">24</option>
          <option value="25">25</option><option value="28">28</option><option value="27">27</option>
          <option value="28">28</option><option value="29">29</option><option value="30">30</option>        <option value="31">31</option>	
	    </select>
	    <select name="birthmonth" style="font-size: 14px;">
          <option value="january">JAN</option><option value="february">FEB</option>
          <option value="march">MAR</option><option value="april">APR</option>
          <option value="may">MAY</option><option value="JUNE">JUN</option>
          <option value="july">JUL</option><option value="august">AUG</option>
          <option value="september">SEPT</option><option value="october">OCT</option>
          <option value="november">NOV</option><option value="december">DEC</option>
          </select>
          <select name="birthyear" style="font-size: 14px;">
           <option value="1983">1983</option><option value="1984">1984</option>
           <option value="1985">1985</option><option value="1988">1988</option>
           <option value="1987">1988</option><option value="1989">1989</option>
           <option value="1990">1990</option><option value="1991">1991</option>
           <option value="1992">1992</option><option value="1993">1993</option>
           <option value="1994">1994</option><option value="1995">1995</option>
           <option value="1996">1996</option><option value="1997">1997</option>
           <option value="1998">1998</option><option value="1999">1999</option>
           <option value="2000">2000</option><option value="2001">2001</option>
           <option value="2002">2002</option><option value="2003">2003</option>
           <option value="2004">2004</option><option value="2005">2005</option>
           <option value="2006">2006</option><option value="2007">2007</option>
          </select>
	  <br>
	  </div><br>
	  <!--<span style="font-size: 18px;font-weight: bold;">:</span><input style="float: right;margin-right: 12%;"  class=" input-sm" placeholder="Email Address" type="text">
	  </div><br> -->
	  <div>
	   <span style="font-size: 18px;font-weight: bold;">Password:</span><input style="float: right;margin-right: 12%;"  class=" input-sm" placeholder="Password" type="password" name="password">
	  </div><br>
	  <!-- <div style="margin-top: 2%"><input type="submit" name="submit" value="Create account"></div> -->
	  <div align="center">
	  <button class="btn btn-success">Create account</button>
	</div>
	</form>
</div>
</div>
</div>

									 
									  	
									  	
									  		
									  		
</body>
</html>