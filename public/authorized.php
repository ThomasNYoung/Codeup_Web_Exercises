<?php

session_start();
require_once '../Auth.php';

$username = "";
if(Auth::check()){
	$username = $_SESSION['username'];
} else{ 
	header('Location: login.php');
	exit();
}
Auth::user();
?>
<!DOCTYPE html>
<html>
<head>
    <title>POST Example</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
	    <h2>you are authorized</h2>
	    <h2>welcome <?= $username; ?></h2>
	    
	    <a href="login.php">Back</a><br>
	    <a href="logout.php">click here to logout</a>
    </div>
</body>
</html>