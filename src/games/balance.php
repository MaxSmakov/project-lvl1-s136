<?php

namespace BrainGames\Games\Balance;

use function \Braingames\Cli\intro;
use function \Braingames\Cli\game;

const PURPOSE = 'Balance the given number.';

function run()
{
    $problem = function () {
        return rand(1, 10000);
    };
    $getTrueAnswer = function ($num) {
        return balance($num);
    };
    game($problem, $getTrueAnswer, PURPOSE);
}

function balance($n)
{
    $arr = str_split(strval($n));
    $sum = array_sum($arr);
    $len = count($arr);
    $rem = $sum%$len;
    $min = ($sum - $rem) / $len;
    for ($i = 0; $i < $len; $i++) {
        $arr[$i] = $min;
    }
    while ($rem > 0) {
        $arr[$len - 1] = $min + 1;
        $rem--;
        $len--;
    }
    return join($arr);
}
