<?php

namespace BrainGames\Cli;

use function BrainGames\Cli\conversation;

function isEven(string $name)
{
    $question = 'Answer "yes" if the number is even, otherwise answer "no".';
    $minValue = 0;
    $maxValue = 100;
    $maxAttempts = 3;
    $evenTest = [];
    for ($i = 1; $i <= $maxAttempts; $i++) {
        $number = random_int($minValue, $maxValue);
        $rightAnswer = ((bool) ($number % 2)) ? 'no' : 'yes';
        $evenTest[] = [$number, $rightAnswer];
    }
    conversation($name, $question, $evenTest);
}
