<?php

$count = 0;
$min = 1;
$max = 100;
$random_number = mt_rand($min , $max);

echo "Guess a number between 1-100\n";

do {
	fwrite(STDOUT, "What's your guess?\n");
	$user_guess = trim(fgets(STDIN));
	$count++;
	if ($user_guess == $random_number) {
		echo "YOU WON!\n";
		echo "It took you ". $count++ . " guesses!\n";
	} elseif ($user_guess > $random_number) {
		echo "LOWER!\n";
	} else {
		echo "HIGHER\n";
	}
} while ($user_guess != $random_number);