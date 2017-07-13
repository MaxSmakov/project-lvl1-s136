<?php

namespace BrainGames\Cli;

use function \cli\line;

function run()
{
    line('Welcome to the Brain Games!');
    $name = \cli\prompt('May I have your name?');
    line("Hello, %s", $name);
}


const ANSWERS_COUNT = 3;

function runEven()
{
  line('Welcome to the Brain Games!');
  $name = \cli\prompt('May I have your name?');
  line("Hello, %s", $name);
    for ($i = 1; $i <= ANSWERS_COUNT; $i++) {
        step($name);
    }

    line("Congratulations, %s", $name);
}


function checkAnswer($number, $answer)
{
    if (($number % 2 === 0 && $answer == "yes") || ($number % 2 != 0 && $answer == "no")) {
        return true;
  }
    return false;
}


function step($name)
{
    $num = rand(1, 100);
    line('Question: ' . $num);
    $ans = \cli\prompt("Your answer is");
    if (checkAnswer($num, $ans)) {
        line('Correct!');
        line();
    } else {
        line('"%s" - is wrong answer!', $ans);
        line("Let's try again, %s!", $name);
        exit();
    }
}
