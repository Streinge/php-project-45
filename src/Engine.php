<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function conversation(string $name, string $question, array $values)
{
    line($question);
    foreach ($values as $val) {
        line("Question: %s", $val[0]);
        $answer = prompt('Your answer');
        if ($val[1] === $answer) {
            line('Correct!');
        } else {
            line("'$answer' is wrong answer ;(. Correct answer was '$val[1]'. \nLet's try again, $name!");
            break;
        }
    }
    line("Congratulations, $name!");
}
