<?php
// var_dump($_POST);
session_start();

	
if($_SESSION['LOGGED_IN_USER'] == true){
	header('Location: authorized.php');
	exit();
}else {
	$_SESSION['LOGGED_IN_USER'] = false;
}



function pageController(){
	
	$data['username'] = isset($_POST['username']) ? $_POST['username'] : '';
	$data['password'] = isset($_POST['password']) ? $_POST['password'] : '';
	if($data['username'] == '' && $data['password'] == ''){
		
	} elseif ($data['username'] == 'guest' && $data ['password'] == 'password'){
		$_SESSION['username'] = 'guest';
		$_SESSION['LOGGED_IN_USER'] = true;
		header('Location: authorized.php');
		exit();
	} elseif($data['username'] != 'guest' || $data['password'] != 'password'){
		echo 'login failed';
	}else{
		echo 'login failed';
	}
} pageController();	
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