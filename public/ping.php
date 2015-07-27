<?php
	// var_dump($_GET);
 	
 		require_once "../Input.php";
 		
 		if(Input::has('counter')){
 			$counter = $_GET['counter'];
 			if(Input::has('direction')){
 				if(Input::get('direction') == 'hit'){
 					$counter +=1;
 				} else if(Input::get('direction')== 'miss'){
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
	<title>ping pong</title>
</head>
<body>
	<h1>this is the score: <?= $counter;?></h1>
		
    	<a href="pong.php?counter=<?= $counter ?>&direction=hit"> hit it!</a>
    	<a href="?counter=<?= $counter ?>&direction=miss">miss!</a>
	
</body>
</html>