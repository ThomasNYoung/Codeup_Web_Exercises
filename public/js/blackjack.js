function isBlackJack(input) {
	if(input ==21) {
		console.log(true);
	} else {
		console.log(false);
	}
}

var outcome = isBlackJack (21);
if (outcome == true) {
	alert('Black Jack 21, you win')
} else {
	alert( 'you lose');
}