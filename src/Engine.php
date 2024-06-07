<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function greeting()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}

function correct(): void
{
    line('Correct!');
}

function congratulations(string $name)
{
    line("Congratulations, $name!");
}

function error(string|int $userAnswer, string|int $rightAnswer, string $name): void
{
    line("'$userAnswer' is wrong answer ;(. Correct answer was '$rightAnswer'.");
    line("Let's try again, $name!");
}
