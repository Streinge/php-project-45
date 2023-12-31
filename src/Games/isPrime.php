<?php

namespace BrainGames\Cli;

use function BrainGames\Cli\conversation;

function isPrime(int $number): bool
{
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

function prime(string $name)
{
    $question = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $minValue = 2;
    $maxValue = 100;
    $maxAttempts = 3;
    $evenTest = [];
    for ($i = 1; $i <= $maxAttempts; $i++) {
        $number = random_int($minValue, $maxValue);
        $rightAnswer = (isPrime($number)) ? 'yes' : 'no';
        $evenTest[] = [$number, $rightAnswer];
    }
    conversation($name, $question, $evenTest);
}
