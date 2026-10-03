<?php
include 'pure_php.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP Demo</title>
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
	<a href = "next_page.php">Click to Next</a>
	<a href="pure_php.php"></a>
	<h1>
		<label>Username:</label>
		
		<?php echo $username;?>
		<br>
		<label>User ID:</label>
		
		<?php echo $user_id;?>
	</h1> 
	

	<button type="button" onclick="greetUser()">Click here...</button>
	<script> 
		let username = "<?php echo $username;?>";
		let userId = "<?php echo $user_id;?>";
		function greetUser(){
			alert(" Hello " + username + "!" + " your user id is: " + userId);
		}
	</script>
</body>
</html>

