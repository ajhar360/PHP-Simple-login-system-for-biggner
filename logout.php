<?php 
session_start();
session_destroy();
unset($_COOKIE['email']);
unset($_COOKIE['password']);
setcookie('email',$email, time()-60*60);
setcookie('password',$pass, time()-60*60);
header('Location: index.php');
?>