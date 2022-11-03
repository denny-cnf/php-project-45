<?php

/**
 * This file contains logic Brain-games Even
 */

namespace Games\Even;

use function Games\Engine\Even;
use function cli\line;
use function cli\prompt;

function startGame()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');
    even($name);
}
