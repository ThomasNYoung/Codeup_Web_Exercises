<?php
session_start();

$username = "";
if($_SESSION['LOGGED_IN_USER'] != true){
	header('Location: login.php');
	exit();
} else{ 
	$username = $_SESSION['username'];
}
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
	    <h2>authorized</h2>
	    <h2>welcome <?= $username; ?></h2>
	    
	    <a href="login.php">Back</a><br>
	    <a href="logout.php">click here to logout</a>
    </div>
</body>
</html>