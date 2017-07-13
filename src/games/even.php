<?php

namespace BrainGames\Games\Even;

use function \cli\line;

const ANSWERS_COUNT = 3;

function run()
{
    line('Welcome to the Brain Games!');
    line('Answer "yes" if number even otherwise answer "no".');
    line();

    $name = \cli\prompt('May I have your name?');
    line("Hello, %s", $name);

    for ($i = 0; $i < ANSWERS_COUNT; $i++) {
        $number = rand(1, 100);
        line('Question: ' . $number);
        $answer = \cli\prompt("Your answer is");
        if ($answer == getAnswer($number)) {
            line('Correct!');
            line();
        } else {
            line('"%s" is wrong answer!', $answer);
            line("Let's try again, %s!", $name);
            exit();
        }
    }

    line("Congratulations, %s", $name);
}

function getAnswer($num)
{
    return $num % 2 == 0 ? "yes" : "no";
}
