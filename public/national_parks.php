<?php
require '../parks_config.php';
require '../db_connect.php';
require '../Input.php';

$limit = 4;
$offset = 0;
$count = $dbc->query('SELECT COUNT(*) FROM national_parks;')->fetchColumn();
$errorMessage = "Add a park.";
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

$query = ("SELECT * FROM national_parks LIMIT :limit OFFSET :offset");
$stmt = $dbc->prepare($query);

//bind
$stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();


$parks = $stmt->fetchAll(PDO::FETCH_ASSOC);

if(Input::has('name') && Input::has('location') && Input::has('date_established') 
   && Input::has('area_in_acres') && Input::has('description')){
	
	$name = Input::get('name');
    $location = Input::get('location');
    $date_established = Input::get('date_established');
    $area_in_acres = Input::get('area_in_acres');
    $description = Input::get('description');

    $formatDate =date("Y-m-d", strtotime($date_established));

    $insertQuery = "INSERT INTO national_parks (name, location, date_established, area_in_acres, description)
    				VALUES (:name, :location, :date_established, :area_in_acres, :description)";
    $stmt=$dbc->prepare($insertQuery);

    $stmt->bindValue(':name', $name, PDO::PARAM_STR);
    $stmt->bindValue(':location', $location, PDO::PARAM_STR);
    $stmt->bindValue(':date_established', $formatDate, PDO::PARAM_STR);
    $stmt->bindValue(':area_in_acres', $area_in_acres, PDO::PARAM_STR);
    $stmt->bindValue(':description', $description, PDO::PARAM_STR);      
    
    $stmt->execute();
   
}else{
		$errorMessage = "Please fill out all fields to add a park.";
}
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
       		<th>Description</th>
        	</tr>
      
    	<? foreach ($parks as $park):?>
        	<tr>
        		<td><?= $park['name']; ?></td>
        		<td><?= $park['location']; ?></td>
        		<td><?= $park['date_established']; ?></td>
        		<td><?= $park['area_in_acres']; ?></td>
        		<td><?= $park['description']; ?></td>
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
		<div class='container'>
			<form method="POST">
	            <fieldset>
	                <legend><?= $errorMessage;?></legend>

	                <label for="name"></label>
	                <input type="text" id="name" name="name" placeholder="name" autofocus><br>

	                <label for="location"></label>
	                <input type="Location" id="location" name="location" placeholder="location"><br>

	                <label for="date_established"></label>
	                <input type="date" id="date_established" name="date_established" placeholder="date_established"><br>

	                <label for="area_in_acres"></label>
	                <input type="number" id="area_in_acres" name="area_in_acres" placeholder="area_in_acres" autofocus><br>

	                <label for="description"></label>
	                <input  textarea type="text" id="description" name="description" placeholder="description" rows="5" cols="40"
	                autofocus>

	                <input method="POST" type="submit" value="Submit">
	            </fieldset>
	        </form>
        </div>
</body>
</html>





	  	
   	
   		

    