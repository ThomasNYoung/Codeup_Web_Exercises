<?php
	// var_dump($_GET);
 	
 	
 		if(isset($_GET['counter'])){
 			$counter = $_GET['counter'];
 			if(!empty($_GET)){
 				if($_GET['direction'] == 'up'){
 					$counter +=1;
 				} else if($_GET['direction'] == 'down'){
	 				$counter -=1;
	 			}
	 		}
 		}else{
 			$counter=0;
 		}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Counter</title>
</head>
<body>
	<h1>this is the count: <?= $counter;?></h1>
		
    	<a href="?counter=<?= $counter ?>&direction=up"> up!</a>
    	<a href="?counter=<?= $counter ?>&direction=down">down!</a>
	
</body>
</html>
 		
 						
 		
 		
 	
 	
