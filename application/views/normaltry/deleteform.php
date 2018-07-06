<!DOCTYPE html>
<html>
<head>
	<title>delete</title>
</head>
<body>
<form method="post" action="delete">
	UserId:<input type="text" name="userid" placeholder="UserId">
	
	<input type="submit" name="delete" value="delete">
</form>
<br><?php if(!empty($error)){echo $error;}?>
    <?php if(!empty($message)){echo $message;}?>
</body>
</html>