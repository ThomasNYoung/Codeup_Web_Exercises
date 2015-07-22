<?php
// var_dump($_POST);

function pageController(){
	$data = [];
	$data['username'] = isset($_POST['username']) ? $_POST['username'] : '';
	$data['password'] = isset($_POST['password']) ? $_POST['password'] : '';
	if($data['username'] == '' && $data['password'] == ''){
		echo 'please enter username and password';
	} elseif ($data['username'] == 'guest' && $data ['password'] == 'password'){
		header('Location: authorized.php');
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
</head>
<body>
    <form method="POST" >
        <label>username</label>
        <input type="text" name="username" placeholder = "enter username"><br>
        <label>password</label>
        <input type="password" name="password" placeholder = "enter password"><br>
        <input type="submit">
    </form>
</body>
</html>