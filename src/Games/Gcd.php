<?php

/**
 * This file contains logic Brain-games Gcd
 */

namespace Games\Gcd;

use function Games\Engine\Gcd;
use function cli\line;
use function cli\prompt;

function StartGame()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return Gcd($name);
}
