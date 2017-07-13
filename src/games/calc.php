<?php

namespace BrainGames\Games\Calc;

use function \cli\line;

const ANSWERS_COUNT = 3;

function run()
{

  line('Welcome to the Brain Games!');
  line('What is the result of the expression?');
  line();

    $name = \cli\prompt('May I have your name?');
    line("Hello, %s", $name);

    for ($i = 0; $i < ANSWERS_COUNT; $i++) {
        $arrSigns = ['+', '-', '*'];
        $sign = $arrSigns[array_rand($arrSigns)];
        $number1 = rand(1, 100);
        $number2 = rand(1, 100);

        $expression = getRandomExpression($sign, $number1, $number2);
        line('Question: ' . $expression);
        $answer = \cli\prompt("Your answer is");
        if ($answer == getAnswer($sign, $number1, $number2)) {
            line('Correct!');
            line();
        } else {
            line('"%s" is wrong answer', $answer);
            line("Let's try again, %s!", $name);
            exit();
        }
    }

    line("Congratulations, %s", $name);    
  }

function getAnswer($sign, $num1, $num2)
{
     switch($sign) {
        case '+':
            return $num1 + $num2;
            break;
        case '-':
            return $num1 - $num2;
            break;
        case '*':
            return $num1 * $num2;
            break;
     }
}

function getRandomExpression($sign, $num1, $num2)
{
    return $num1 . ' ' . $sign . ' ' . $num2;

}
