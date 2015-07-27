<?php

require_once '../Input.php';
require_once '../Log.php';

class Auth
{
	public static $password = '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm';


	
	
	public static function attempt($username, $userPass)
	{ 
		
		$log = new Log;
		
		if($username == 'guest' && password_verify($userPass, self::$password)){
			$_SESSION['username'] = $username;
			$_SESSION['LOGGED_IN_USER'] = true;
			$log->logInfo($username . " you're a winner!");
			header('Location: authorized.php');
			exit();
		}else{
			echo "User $username failed to log in." . PHP_EOL;
			$log->logError($username . " failed");
		}

	}

	public static function check()
	{
		if(isset($_SESSION['LOGGED_IN_USER'])){
			return true;
		}else{
			return false;
		}
	}
		

		

	public static function user()
	{
		if(isset($_SESSION['username'])){
			return $_SESSION['username'];
		}else{
			$_SESSION['username'] = '';
		}
	}
	
	public static function logout()
	{
		$_SESSION = [];

		session_destroy();
		header('Location: login.php');
		exit();

	}



}


	