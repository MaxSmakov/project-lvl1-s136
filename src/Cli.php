<?php

namespace  BrainGames\Cli;

//require_once __DIR__ . '/../php-cli-tools/lib/cli/cli.php';
require_once __DIR__ . '/../vendor/autoload.php';
use function \cli\line;

function run(){
  line('Welcome to the Brain Game!');
  $name = \cli\prompt('May I have your name?');
  line("Hello, %s!", $name);
}
