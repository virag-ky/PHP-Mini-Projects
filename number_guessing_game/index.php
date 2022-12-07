<?php

$play_count = 0;
$correct_guesses = 0;
$guess_high = 0;
$guess_low = 0;

echo "I'm going to think of numbers between 1 and 10 (inclusive). Do you think you can guess correctly?\n";

function guessNumber() {
  global $play_count, $correct_guesses, $guess_high, $guess_low;

  $play_count++;

  $random_num = rand(1, 10);
  echo "\nMake your guess...\n";

  $response = intval(readline(">> "));
  echo "Round: $play_count\nMy Number: $random_num\nYour guess: $response";

  if ($response === $random_num) {
    $correct_guesses++;
  } elseif ($response > $random_num) {
    $guess_high++;
  } else {
    $guess_low++;
  };

$percent_correct = $correct_guesses/$play_count * 100;
echo "\nAfter $play_count rounds, here are some facts about your guessing:\nYou guessed the number correctly $percent_correct% of the time.\n";

if ($guess_high > $guess_low){
    echo "When you guessed wrong, you tended to guess high";
} else if ($guess_high < $guess_low) {
    echo "When you guessed wrong, you tended to guess low";
}
};

guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();