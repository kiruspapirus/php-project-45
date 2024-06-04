<?php

namespace BrainGames\Games\Prime;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\greeting;
use function BrainGames\Engine\correct;
use function BrainGames\Engine\error;
use function BrainGames\Engine\congratulations;

function startGame()
{
    $name = greeting();
    line('Answer "yes" if given number is prime. Otherwise answer "no".');
    function isPrime($number): bool
    {
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                   return false;
            }
        }
        return true;
    }
    for ($j = 0; $j < 3; $j++) {
          line('Question: ' . $number = rand(1, 99));
          $rightAnswer = isPrime($number) ? 'yes' : 'no';
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
