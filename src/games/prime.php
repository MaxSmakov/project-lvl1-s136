<?php

namespace BrainGames\Games\Prime;

use function \Braingames\Cli\intro;
use function \Braingames\Cli\game;

const PURPOSE = 'Answer "yes" if number prime otherwise answer "no"';

function run()
{
    $problem = function () {
        return rand(1, 100);
    };
    $getTrueAnswer = function ($num) {
        return trueF($num);
    };
    game($problem, $getTrueAnswer, PURPOSE);
}

function isPrime($n)
{
    for ($i = 2; $i != $n; $i++) {
        if (($n % $i == 0 && $n > 2) || !is_int($n) || ($n < 2)) {
            return false;
        }
    }
    return true;
}

function trueF($num)
{
    return isPrime($num) ? "yes" : "no";
}
