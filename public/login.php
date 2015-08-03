<?php
// var_dump($_POST);
session_start();
require_once '../Auth.php';

if(Auth::check()){
	header('Location: authorized.php');
	exit();
}

if(Input::has('username') && Input::has('password')){
	$username = trim(Input::get('username'));
	$userPass = trim(Input::get('password'));
	Auth::attempt($username, $userPass);	
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
    <div class = "container">
    <form method="POST" >
        <label>username</label>
        <input type="text" name="username" placeholder = "enter username"><br>
        <label>password</label>
        <input type="password" name="password" placeholder = "enter password"><br>
        <input type="submit">
    </form>
</div>
</body>
</html>
	


	
	