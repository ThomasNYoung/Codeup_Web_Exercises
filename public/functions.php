<?php
session_start();

var_dump($_REQUEST);
$key = date('Y-m-d');
function inputHas($key){
	if(isset($_REQUEST[$key])){
		return true;
	}else{
		return false;
	}
}
	
function inputGet($key){
	if (isset($_REQUEST[$key])) {
		return $_REQUEST[$key];
	}else{
		return null;
	}
}
function escape($input){
	return htmlspecialchars(strip_tags($input));
}
	
	
?>