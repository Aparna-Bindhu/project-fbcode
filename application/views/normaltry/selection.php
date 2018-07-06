s<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
<form method="post" action="select">
	UserId:<input type="text" name="userid" placeholder="UserId">
	
	<input type="submit" name="select" value="select">
</form>
<br><?php if(!empty($error)){echo $error;}?>
    <?php if(!empty($message)){echo $message;}?>
    <?php if(!empty($results)){?>
    	<h1>RESULTS</h1>
    	<table border=2>
    		<?php foreach($results as $key=>$value) {?>
    			<tr>
    				<th>id</th>
    				<th>fullname</th>
    				<th>email</th>
    				<th>password</th>
    			</tr>
    			<tr>
    				<td><?php echo $value->SNo; ?></td>
    				<td><?php echo $value->Name; ?></td>
    				<td><?php echo $value->Email; ?></td>
    				<td><?php echo $value->Password; ?></td>
    			</tr>
    		<?php } ?>
    	</table>
    <?php }?>
    			</body>
</html>