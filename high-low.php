<?php

if ($argc !== 3) {
	echo "Please pass the minimum and maximum for game." .PHP_E0L;
	echo PHP_EOL;
	echo "Usage:" . PHP_EOL;
	echo ' php high-low.php <min> <max>' . PHP_EOL;
	die;
}

$min =$argv[1];
$max =$argv[2];

$randomNumber = mt_rand($min, $max);
$guessNumber = 0;
// echo "{$randomNumber}\n";

//Write the output
fwrite(STDOUT, 'Guess? ');

//Get the input from the user

do {
	$userGuess = trim(fgets(STDIN));
	if (! is_numeric($userGuess)) {
		echo "Hey! That's not a number!" . PHP_EOL;
		continue;
	}
	if ($userGuess < $randomNumber) {
		$guessNumber += 1;
		echo "HIGHER" . PHP_EOL;
	} else if ($userGuess > $randomNumber) {
		$guessNumber += 1;
		echo "LOWER" . PHP_EOL;
	} else if ($userGuess == $randomNumber) {
		// $guessNumber++;
		$guessNumber += 1;
		echo "GOOD GUESS!";
		echo "You guessed {$guessNumber} times!\n";
		exit;
	}
	fwrite(STDOUT, 'Guess? ');
} while ($userGuess !== $randomNumber);

var_dump($argc);

var_dump($argv);

// if ($userGuess < $randomNumber) {
// 	echo "HIGHER" . PHP_EOL;
// 	fwrite(STDOUT, 'Guess? ');
// } else if ($userGuess > $randomNumber) {
// 	echo "LOWER" . PHP_EOL;
// 	fwrite(STDOUT, 'Guess? ');
// } else {
// 	echo "GOOD GUESS!";
// }