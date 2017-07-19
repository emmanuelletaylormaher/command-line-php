<?php

$randomNumber = rand(1, 100);
// echo "{$randomNumber}\n";

//Write the output
fwrite(STDOUT, 'Guess? ');

//Get the input from the user

do {
	$userGuess = trim(fgets(STDIN));
	$guessNumber = 0;
	if (! is_numeric($userGuess)) {
		echo "Hey! That's not a number!" . PHP_EOL;
		continue;
	}
	if ($userGuess < $randomNumber) {
		echo "HIGHER" . PHP_EOL;
	} else if ($userGuess > $randomNumber) {
		echo "LOWER" . PHP_EOL;
	} else if ($userGuess == $randomNumber) {
		$guessNumber++;
		echo "GOOD GUESS!";
		echo "You guessed {$guessNumber} times!\n";
		exit;
	}
	$guessNumber = $guessNumber++;
	fwrite(STDOUT, 'Guess? ');
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