<?php

namespace BrainGames\Cli;

use function \cli\line;

const ANSWERS_COUNT = 3;

function run()
{
    line('Welcome to the Brain Games!');
    $name = \cli\prompt('May I have your name?');
    line("Hello, %s", $name);
}

function intro($purpose)
{
    line('Welcome to the Brain Games!');
    line($purpose);
    line();
}

function game($problem, $trueAnswer, $purpose)
{
    intro($purpose);

    $name = getName();

    for ($i = 0; $i < ANSWERS_COUNT; $i++) {
        $issue = $problem();
        question($issue);
        $userAns = \cli\prompt("Your answer is");
        $trueAns = $trueAnswer($issue);
        if ($userAns == $trueAns) {
            line('Correct!');
            line();
        } else {
            line(
                "'%s' is wrong answer ;(. Correct answer was '%s'",
                $userAns,
                $trueAns
            );
            line("Let's try again, %s!", $name);
            break;
        }
    }
    congratulations($name);
}

function getName()
{
    $name = \cli\prompt('May I have your name?');
    line("Hello, %s", $name);// hello() in cli.php
    return $name;
}

function question($problem)
{
    line('Question: ' . $problem);
}

function congratulations($name)
{
    line("Congratulations, %s", $name);
}
