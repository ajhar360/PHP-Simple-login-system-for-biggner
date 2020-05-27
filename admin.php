<?php 
	session_start();
	if(!isset($_SESSION['email']) && !isset($_SESSION['password']) && !isset($_COOKIE['email']) && !isset($_COOKIE['password'])){
		header('Location:index.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
</head>
<body>
	<h1>Welcome To Admin</h1>
	<table>
		<tr>
			<td>Your Email ID: </td>
			<td>
				SESSION: <?php echo $_SESSION['email']; ?></td>
				
		</tr>
		<tr>
			<td>COOKIE: <?php echo isset($_COOKIE['email']) ? $_COOKIE['email']: NULL;?></td>
		</tr>
		<tr>
			<td>COOKIE: <?php if (isset($_COOKIE['password'])) {
				echo $_COOKIE['password'];
			}; ?></td>
		</tr>
		<tr>
			<td><a href="logout.php">LOGOUT !</a></td>
			
		</tr>
	</table>
</body>
</html>