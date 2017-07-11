<?php

namespace  BrainGames\Cli;

//require_once __DIR__ . '/../php-cli-tools/lib/cli/cli.php';
function run(){
  echo 'Welcome to the Brain Game!', PHP_EOL;
  echo 'May I have your name? ';

  $name = trim(fgets(STDIN));
  echo "Hello, {$name}!", PHP_EOL;
}
