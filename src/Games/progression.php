<?php

namespace BrainGames\Cli;

use function BrainGames\Cli\conversation;

function missedProgression(array $elements, int $index): string
{
    $lenght = count($elements);
    $result = '';
    for ($i = 0; $i <  $lenght; $i++) {
        if ($i === $index) {
            $result .= ".. ";
        } else {
            $result .= "{$elements[$i]} ";
        }
    }
    return $result;
}

function findProgression(string $name)
{
    $question = 'What number is missing in the progression?';
    $minValue = 1;
    $maxValue = 100;
    $maxAttempts = 3;
    $valuesTest = [];
    for ($i = 1; $i <= $maxAttempts; $i++) {
        $progressionTest = [];
        $minNumberElements = 5;
        $maxNumberElements = 10;
        $beginValue = random_int($minValue, $maxValue);
        $stepProgression = random_int($minValue, $maxValue);
        $numberElements = random_int($minNumberElements, $maxNumberElements);
        for ($j = 0; $j < $numberElements; $j++) {
            $progressionTest[] = $beginValue + $j * $stepProgression;
        }
        $missedIndex = random_int(0, $numberElements - 1);
        $expression = missedProgression($progressionTest, $missedIndex);
        $rightAnswer = $progressionTest[$missedIndex];
        $valuesTest[] = [$expression, (string) $rightAnswer];
    }
    conversation($name, $question, $valuesTest);
}
