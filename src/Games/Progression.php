<?php

/**
 * This file contains logic Brain-games Progression
 */

namespace Games\Progression;

use function Games\Engine\Progression;
use function cli\line;
use function cli\prompt;

function startGame()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line("What number is missing in the progression?");
    progression($name);
}
