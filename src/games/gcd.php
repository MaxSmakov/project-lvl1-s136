<?php

namespace BrainGames\Games\Gcd;

use function \Braingames\Cli\intro;
use function \Braingames\Cli\game;

const PURPOSE = 'Find the greatest common divisor of given numbers.';

function run()
{
    $problem = function () {
        return problemF();
    };
    $getTrueAnswer = function ($purpose) {
        return trueF($purpose);
    };
    game($problem, $getTrueAnswer, PURPOSE);
}

function problemF()
{
    $num1 = rand(1, 100);
    $num2 = rand(1, 100);
    return "{$num1} {$num2}";
}

function trueF($purpose)
{
    list($num1, $num2) = explode(' ', $purpose);
    return gcd($num1, $num2);
}

function gcd($num1, $num2)
{
    $min = ($num1 >= $num2) ? $num2 : $num1;
    if ($min < 1) {
        return false;
    }
    $k = 1;
    for ($i = 0; $i < $min; $i++) {
        if ($num1 % $k === 0 && $num2 % $k === 0) {
            $gcd = $k;
        }
        $k++;
    }
    return $gcd;
}
