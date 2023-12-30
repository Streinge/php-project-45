<?php

namespace BrainGames\Cli;

use function BrainGames\Cli\conversation;

function operation(int $operand1, int $operand2, string $operator): int
{
    switch ($operator) {
        case '+':
            $result = $operand1 + $operand2;
            break;
        case '-':
            $result = $operand1 - $operand2;
            break;
        case '*':
            $result = $operand1 * $operand2;
    }
    return $result;
}

function mathExamples($name)
{
    $question = 'What is the result of the expression?';
    $minValue = 0;
    $maxValue = 100;
    $numberOperations = 3;
    $maxAttempts = 3;
    $mathOperations = ['+', '-', '*'];
    $operationsTest = [];
    for ($i = 1; $i <= $maxAttempts; $i++) {
        $number1 = random_int($minValue, $maxValue);
        $number2 = random_int($minValue, $maxValue);
        $index = random_int($minValue, $numberOperations - 1);
        $expression = "{$number1} {$mathOperations[$index]} {$number2}";
        $rightAnswer = operation($number1, $number2, $mathOperations[$index]);
        $operationsTest[] = [$expression, (string) $rightAnswer];
    }
    conversation($name, $question, $operationsTest);
}
