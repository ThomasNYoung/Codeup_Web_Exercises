<?php
var_dump($_GET);
$name = 'Tom';
$date = date('D, M d, Y')
?>
<!DOCTYPE html>
<html>
<head>
	<title>GET requests</title>
</head>
<body>
	<a href="?name=<?= $name; ?>&date = <?= $date; ?>">My Name AND today's date</a>

	<form method="GET" action="https://duckduckgo.com/">
    	<input type="text" name="q" value="" placeholder="Search DuckDuckGo">
    	<button type="submit">Go!</button>
	</form>
</body>
</html>