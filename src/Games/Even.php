<?php

/**
 * This file contains logic Brain-games Even
 */

namespace Games\Even;

use function Games\Engine\Even;
use function cli\line;
use function cli\prompt;

function StartGame()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return Even($name);
}
