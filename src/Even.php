<?php

namespace BrainGames\Even;

use function cli\line;
use function cli\prompt;

function runGame()
{
line('Welcome to the Brain Games!');
$name = prompt('May I have your name?');
line("Hello, %s!", $name);
line('Answer "yes" if the number is even, otherwise answer "no".');
for ($i = 0; $i < 3; $i++) {
        line('Question: ' . $number = rand(1, 99));
        $userAnswer = prompt('Your answer');
        $rightAnswer = $number % 2 === 0 ? 'yes' : 'no';
        if ($userAnswer == $rightAnswer) {
            line('Correct!');;
        } else {
            line("'$userAnswer' is wrong answer ;(. Correct answer was '$rightAnswer'.");
    line("Let's try again, $name!");
            return;
        }
    }
    line("Congratulations, $name!");
}
