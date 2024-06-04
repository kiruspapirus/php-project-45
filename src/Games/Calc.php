<?php

namespace BrainGames\Games\Calc;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\greeting;
use function BrainGames\Engine\correct;
use function BrainGames\Engine\error;
use function BrainGames\Engine\congratulations;

function startGame()
{
    $name = greeting();
    line('What is the result of the expression?');
    $operation = ['+', '-', '*'];
    for ($i = 0; $i < count($operation); $i++) {
        $number1 = rand(1, 99);
        $number2 = rand(1, 99);
        line('Question: ' . "$number1 " . $operation[$i] . " $number2");
        if ($operation[$i] === '+') {
            $rightAnswer = $number1 + $number2;
        } elseif ($operation[$i] === '-') {
             $rightAnswer = $number1 - $number2;
        } else {
             $rightAnswer = $number1 * $number2;
        }
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
