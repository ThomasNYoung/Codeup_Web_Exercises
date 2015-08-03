<?php
require '../parks_config.php';
require '../db_connect.php';

$limit = 4;
$offset = 0;
$count = $dbc->query('SELECT COUNT(*) FROM national_parks;')->fetchColumn();
$numPages = ceil($count / $limit);

if (empty($_GET) || !is_numeric($_GET['page']) || $_GET['page'] < 1) {
	$_GET['page'] = 1;
	$pageID = 1;
	}else {
	$offset = ($_GET['page'] - 1) * $limit;
	$pageID = $_GET['page'];
 }

if($_GET['page'] > $numPages){
	header("Location: ?page={$numPages}");
	exit();
}

$query = ("SELECT * FROM national_parks LIMIT " . $limit . " OFFSET " . ($offset)  . ";");
$stmt = $dbc->query($query)-> fetchAll(PDO::FETCH_ASSOC);



?>
<!DOCTYPE html>
<html>
<head>
	<title>National Parks</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
	
	<h1 class = "container">National Parks</h1>
    <table class = "table-striped container">
        <tr>
        	<th>Name</th>
        	<th>Location</th>
       		<th>Date Established</th>
       		<th>Area in Acres</th>
        	</tr>
      
    	<? foreach ($stmt as $park):?>
        	<tr>
        		<td><?= $park['name']; ?></td>
        		<td><?= $park['location']; ?></td>
        		<td><?= $park['date_established']; ?></td>
        		<td><?= $park['area_in_acres']; ?></td>
        	</tr>
    	<? endforeach;?>
    </table> 
	<div class = 'container'>
		<? if ($pageID != 1) : ?>
	  		<a style="float: left" href="?page=<?= ($pageID - 1) ?>">Previous</a>
	  	<? endif ?>
	  
	  	<? if ($pageID < $numPages) : ?>
	  		<a style="float: right" href="?page=<?= ($pageID + 1) ?>">Next</a>
	  	<? endif ?>

	</div>
</body>
</html>





	  	
   	
   		

    