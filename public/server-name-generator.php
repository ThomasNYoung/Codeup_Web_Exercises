<?php
$adjective = ['didactic', 'gregarious', 'dilatory', 'incendiary', 'hubristic', 
'garrulous', 'loquacious', 'jejune', 'parsimonious','Uxorious'];
$noun = ['linx','flipper','chicken','Proposal','Implication','Insinuation','reticulum','Significance','board','Concan'];

function generator($array){
			$randomNumber = mt_rand(0, 9);
			return($array[$randomNumber]);
    	 }
    	 $randomAdjective = generator($adjective);
    	 $randomNoun = generator($noun);
?>

<!DOCTYPE html>
<html>
<head>
	<title>server name generator</title>
</head>
<body>
	<h2>refresh for new server name</h2>

	<h2>
		<?php
			echo $randomAdjective . ' ' . $randomNoun; 
		?> 
	</h2>

</body>
</html>