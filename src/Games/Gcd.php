<?php

namespace BrainGames\Games\Gcd;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\greeting;
use function BrainGames\Engine\correct;
use function BrainGames\Engine\error;
use function BrainGames\Engine\congratulations;

function startGame()
{
    function gcd(int $a, int $b)
    {
        while ($a != $b) {
            if ($a > $b) {
                $a -= $b;
            } else {
                $b -= $a;
            }
        }
        return $a;
    }
    $name = greeting();
    line('Find the greatest common divisor of given numbers.');
    for ($i = 0; $i < 3; $i++) {
        $number1 = rand(1, 99);
        $number2 = rand(1, 99);
        line('Question: ' . "$number1 " . "$number2");
        $rightAnswer = gcd($number1, $number2);
        $userAnswer = prompt('Your answer');
        if ($userAnswer == $rightAnswer) {
            correct();
        } else {
            error($userAnswer, $rightAnswer, $name);
            return;
        }
    }
    congratulations($name);
}
