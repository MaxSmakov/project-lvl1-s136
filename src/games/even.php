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
    $getTrueAnswer = function ($num) {
        return isEven($num);
    };
    game($problem, $getTrueAnswer, PURPOSE);
}

function isEven($number)
{
    return $number % 2 == 0 ? "yes": "no";
}
