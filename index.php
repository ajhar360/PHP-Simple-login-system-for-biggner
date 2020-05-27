<?php 
session_start();
	if(isset($_POST['login'])){

		$db_email= 'rajrashed421@gmail.com';
		$db_pass= 'khan';
		$email = $_POST['email'];
		$pass = $_POST['password'];
		$keep = isset($_POST['keep'])? $_POST['keep']: NULL;

		if($email==$db_email & $pass==$db_pass){
			$_SESSION['email'] = $email;
			$_SESSION['password'] = $pass;
			if(isset($keep)){
			setcookie('email',$email, time()+60*60);
			setcookie('password',$pass, time()+60*60);
			}
			header('Location: admin.php');
		}else{
			$ale ='<div class="alert alert-warning" role="alert">Please Provide Correct Information! </div>';;
		}
	}

	if(isset($_SESSION['email']) && isset($_SESSION['password']) || isset($_COOKIE['email']) && isset($_COOKIE['password'])){
		header('Location:admin.php');
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

<div class="login">
	<form action="" method="POST">
		<input type="email" name="email" required="" placeholder="Email Address">
		<input type="passowrd" name="password" required="" placeholder="PassWord">
		<input type="checkbox" name="keep"> 
		<input type="submit" name="login" value="Login">
	</form>

	<?php if(isset($ale)){echo $ale;}?>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>