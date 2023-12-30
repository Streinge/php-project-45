<?php

namespace BrainGames\Cli;

use function BrainGames\Cli\conversation;

function isEven($name)
{
    $question = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $minValue = 0;
    $maxValue = 100;
    $maxAttempts = 3;
    $evenTest = [];
    for ($i = 1; $i <= $maxAttempts; $i++) {
        $number = random_int($minValue, $maxValue);
        $rightAnswer = ($number % 2) ? 'no' : 'yes';
        $evenTest[] = [$number, $rightAnswer];
    }
    conversation($name, $question, $evenTest);
}
