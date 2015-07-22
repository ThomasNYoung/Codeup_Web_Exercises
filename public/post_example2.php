<?php
$name = isset($_POST['name']) ? $_POST['name'] : '';
$number = isset($_POST['number']) ? $_POST['number'] : '';
?>
<!DOCTYPE html>
<html>
<head>
    <title>POST Example</title>
</head>
<body>
    <h2>Name</h2>
    <p><?php echo htmlspecialchars(strip_tags($name)); ?></p>
    <h2>Number</h2>
    <p><?php echo htmlspecialchars(strip_tags($number)); ?></p>
    <a href="post_example.php">Back</a>
</body>
</html>