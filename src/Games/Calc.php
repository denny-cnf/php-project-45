<?php

/**
 * This file contains logic Brain-games Calc
 */

namespace Games\Calc;

use function Games\Engine\Calc;
use function cli\line;
use function cli\prompt;

function StartGame()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return Calc($name);
}
