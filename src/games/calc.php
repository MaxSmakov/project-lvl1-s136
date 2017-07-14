<?php

namespace BrainGames\Games\Calc;

use function \Braingames\Cli\intro;
use function \Braingames\Cli\game;

const PURPOSE = 'What is the result of the expression?';

function run()
{
    $problem = function () {
        $num1 = rand(1, 100);
        $num2 = rand(1, 100);
        $arrSigns = ['+', '-', '*'];
        $sign = $arrSigns[array_rand($arrSigns)];
        return "{$num1} {$sign} {$num2}";
    };
    $trueAnswer = function ($purpose) {
        list($num1, $sign, $num2) = explode(' ', $purpose);
        switch ($sign) {
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
    };
    intro(PURPOSE);
    game($problem, $trueAnswer);
}

$rightAnswer = function ($question) {
    list($number1, $sign, $number2) = explode(' ', $question);

    switch ($sign) {
    case '+':
        return $number1 + $number2;
            break;
    case '-':
        return $number1 - $number2;
            break;
    case '*':
        return $number1 * $number2;
            break;
    }
};
