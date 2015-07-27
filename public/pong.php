<?php
	// var_dump($_GET);
 	require_once '../Input.php';
 	
 		if(Input::has('counter')){
 			$counter = $_GET['counter'];
 			if(Input::has('direction')){
 				if(Input::get('direction') == 'hit'){
 					$counter +=1;
 				} else if(Input::has('direction') == 'miss'){
	 				$counter = 'game over!';
	 			}
	 		}
 		}else{
 			$counter=0;
 		}
?>
<!DOCTYPE html>
<html>
<head>
	<title>pong ping</title>
</head>
<body>
	<h1>this is the score: <?= $counter;?></h1>
		
    	<a href="ping.php?counter=<?= $counter ?>&direction=hit"> hit it!</a>
    	<a href="?counter=<?= $counter ?>&direction=miss">miss!</a>
	
</body>
</html>
