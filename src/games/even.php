<?php

namespace BrainGames\Games\Even;

use function \Braingames\Cli\intro;
use function \Braingames\Cli\game;

const PURPOSE = 'Answer "yes" if number even otherwise answer "no"';

function run()
{
    $problem = function () {
        return rand(1, 100);
    };
    $trueAnswer = function ($num) {
        return isEven($num) ? "yes": "no";
    };
    intro(PURPOSE);
    game($problem, $trueAnswer);
}

function isEven($number)
{
    return $number % 2 == 0 ? true : false;
}
