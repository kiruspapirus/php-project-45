<?php
namespace BrainGames\Games\Progression;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\greeting;
use function BrainGames\Engine\correct;
use function BrainGames\Engine\error;
use function BrainGames\Engine\congratulations;

function startGame()
{
    $name = greeting();
    line('What number is missing in the progression?');

    for ($i = 0; $i < 3; $i++)
        {
          $progression = [rand(0, 20)];
          $length = rand(5, 10);
          $progressionStep = rand(2, 5);

          for ($j = 0; $j < $length - 1; $j++)
            {
              $progression[] = $progression[$j] + $progressionStep;
            }

          $randomValue = array_rand($progression, 1);
          $rightAnswer = $progression[$randomValue];
          $progression[$randomValue] = '..';

          $progression = implode(' ', $progression);
          line('Question: ' . $progression);

          $userAnswer = prompt('Your answer');
          if ($userAnswer == $rightAnswer)
             {
               correct();
             }
          else
             {
               error($userAnswer, $rightAnswer, $name);
               return;
             }
        }
    congratulations($name);
}
