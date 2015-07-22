<?php
	// var_dump($_GET);
 	
 	
 		if(isset($_GET['counter'])){
 			$counter = $_GET['counter'];
 			if(!empty($_GET)){
 				if($_GET['direction'] == 'hit'){
 					$counter +=1;
 				} else if($_GET['direction'] == 'miss'){
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