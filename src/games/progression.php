<?php

namespace BrainGames\Games\Progression;

use function \Braingames\Cli\intro;
use function \Braingames\Cli\game;

const PURPOSE = 'What number is missing in this progression?';

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
    $acc = rand(1, 10);
    $n1 = rand(1, 100);
    $arr = [$n1];
    for ($i = 1; $i < 10; $i++) {
        $arr[$i] = $arr[$i - 1] + $acc;
    }
    $dot = rand(0, 9);
    $arr[$dot] = '..';
    return join(' ', $arr);
}

function trueF($purpose)
{
    $arr = explode(' ', $purpose);
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] == '..') {
            $dot = $i;
            break;
        }
    }
    if ($dot === 0) {
        $acc = $arr[2] - $arr[1];
        return $arr[1] - $acc;
    } elseif ($dot === count($arr) - 1) {
        $acc = $arr[1] - $arr[0];
        return $arr[$dot -1] + $acc;
    } else {
        return ($arr[$dot - 1] + $arr[$dot + 1]) / 2;
    }
}
