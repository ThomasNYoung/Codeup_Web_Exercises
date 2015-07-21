<?php


function pageController()
{
    // Initialize an empty data array.
    $data = [];

    // Add data to be used in the html view.
    
		$data['favoriteThings'] = ['cars', 'bars', 'guitars', '50 cent nachos', 'hot chicken wings', 'beer', 'bacon'];

    // Return the completed data array.
    return $data;    
}
extract(pageController());

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
   	
   		
    	<? foreach ($favoriteThings as $favoriteThing):?>
        	<tr><td><?= $favoriteThing; ?></td></tr>
    	<? endforeach; ?>
    	
    
    </table> 
</body>
</html>