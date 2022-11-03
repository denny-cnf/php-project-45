<?php

/**
 * This file contains logic Brain-games Prime
 */

namespace Games\Prime;

use function Games\Engine\Prime;
use function cli\line;
use function cli\prompt;

function startGame()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if given number is prime. Otherwise answer "no".');
    prime($name);
}
