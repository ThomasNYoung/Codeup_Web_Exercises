<?php
$adjective = ['didactic', 'gregarious', 'dilatory', 'incendiary', 'hubristic', 
'garrulous', 'loquacious', 'jejune', 'parsimonious','Uxorious'];
$noun = ['linx','flipper','chicken','Proposal','Implication','Insinuation','reticulum','Significance','board','Concan'];


// Call the pageController function and extract all the returned array as local variables.

function generator($array){
	$randomNumber = mt_rand(0, 9);
	return($array[$randomNumber]);
 }

function pageController($adjective, $noun)
{
    // Initialize an empty data array.
    $data = [];

    // Add data to be used in the html view.
  
    $data['randomAdjective'] = generator($adjective);
    $data['randomNoun'] = generator($noun);

    // Return the completed data array.
    return $data;    
}
		extract(pageController($adjective, $noun));
?>

<!DOCTYPE html>
<html>
<head>
	<title>server name generator</title>
</head>
<body>
	<h2>refresh for new server name</h2>

	<h2>
		<?= $randomAdjective . ' ' . $randomNoun;?> 
	</h2>

</body>
</html>