<?php

$favoriteThings = ['cars', 'bars', 'guitars', '50 cent nachos', 'hot chicken wings', 'beer', 'bacon'];

?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <title></title>
</head>
<body>
    <h1 class = "container">my favorite things</h1>
   <table class = "table-striped container">
   	
   		
    	<?php foreach ($favoriteThings as $favoriteThing) { ?>
        	<tr><td><?php echo $favoriteThing ?></td></tr>
    	<?php } ?>
    	
    
    </table> 
</body>
</html>