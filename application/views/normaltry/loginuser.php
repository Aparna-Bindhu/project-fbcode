<!DOCTYPE html>
<html>
<head>
	<title>loginpageuser</title>
</head>
<body>
<form method="post" action="userlogin">
		<b>Email:</b><input type="text" name="email" placeholder="email address">
		<b>Password:</b><input type="password" name="password" placeholder="password">
        <input type="submit" name="sub" value="submit">
	</form>
   <?php if(!empty($error)){ echo $error;}?>
<?php if(!empty($message)){ echo $message;}?>
<?php if(!empty(validation_errors())){echo validation_errors();}?>
</body>
</html>