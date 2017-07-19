<?php

$randomNumber = rand(1, 100);
echo "{$randomNumber}\n";

//Write the output
fwrite(STDOUT, 'Guess? ');

//Get the input from the user

do {
	$userGuess = fgets(STDIN);
	fwrite(STDOUT, 'Guess? ');
	if ($userGuess < $randomNumber) {
		echo "HIGHER" . PHP_EOL;
	} else if ($userGuess > $randomNumber) {
		echo "LOWER" . PHP_EOL;
	} else if ($userGuess == $randomNumber) {
		echo "GOOD GUESS!";
	}
} while ($userGuess !== $randomNumber);


// if ($userGuess < $randomNumber) {
// 	echo "HIGHER" . PHP_EOL;
// 	fwrite(STDOUT, 'Guess? ');
// } else if ($userGuess > $randomNumber) {
// 	echo "LOWER" . PHP_EOL;
// 	fwrite(STDOUT, 'Guess? ');
// } else {
// 	echo "GOOD GUESS!";
// }