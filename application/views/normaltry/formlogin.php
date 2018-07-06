<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
<form method="post" action="login">
	UserId:<input type="text" name="userid" placeholder="UserId">
	Password:<input type="password" name="password" placeholder="Password">
	<input type="submit" name="login" value="Login">
</form>
<br><?php if(!empty($error)){echo $error;}?>
    <?php if(!empty($message)){echo $message;}?>
</body>
</html>