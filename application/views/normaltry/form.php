<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<body>
	
	<form method="post" action="formreg">
		<b>Name:</b><input type="text" name="name" placeholder="fullname">
		<b>Email:</b><input type="text" name="email" placeholder="email address">
		<b>Password:</b><input type="password" name="password" placeholder="password">
        <input type="submit" name="sub" value="submit">
	</form>
    <br><?php if(!empty($error)){echo $error;}?>
    <?php if(!empty($message)){echo $message;}?>
</body>
</html>