<?php

namespace BrainGames\Cli;

use function BrainGames\Cli\conversation;

function calculateGcd(int $operand1, int $operand2): int
{
    if ($operand1 === $operand2) {
        return $operand1;
    }
    while ($operand1 !== 0 and $operand2 !== 0) {
        if ($operand1 > $operand2) {
            $operand1 = $operand1 % $operand2;
        } else {
            $operand2 = $operand2 % $operand1;
        }
    }
    return $operand1 + $operand2;
}

function findGcd(string $name)
{
    $question = 'Find the greatest common divisor of given numbers.';
    $minValue = 1;
    $maxValue = 100;
    $maxAttempts = 3;
    $valuesGod = [];
    for ($i = 1; $i <= $maxAttempts; $i++) {
        $number1 = random_int($minValue, $maxValue);
        $number2 = random_int($minValue, $maxValue);
        $expression = "{$number1} {$number2}";
        $rightAnswer = calculateGcd($number1, $number2);
        $valuesGod[] = [$expression, (string) $rightAnswer];
    }
    conversation($name, $question, $valuesGod);
}
