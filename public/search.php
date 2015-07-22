<?php
$query = urlencode('Dave & Busters');

$url = "https://duckduckgo.com/?q={$query}";


?>
<!DOCTYPE html>
<html>
<head>
	<title>searchin</title>
</head>
<body>
	 <form method="GET" >
        <label>search?</label>
        <input type="text" name="<? $query; ?>" placeholder = "searches" action= "<? $query; ?>"><br>
        <input type="submit">
    </form>

</body>
</html>