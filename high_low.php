<?php

$areArgumentsNumberic = ctype_digit($argv[1]) && ctype_digit($argv[2]);

if ($argc == 3 && ($argv[1] < $argv[2]) && $areArgumentsNumberic) {

$min = $argv[1];
$max = $argv[2];

} else {
	echo "Enter your arguments properly!!\n";
	exit(0);
}


do {
	$count = 0;
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

	fwrite(STDOUT, "Play Again?\n");
	$play_again = trim(fgets(STDIN));

} while ($play_again == "yes");
