<?php

/**
 * This file contains logic Brain-games Even
 */

namespace Games\Even;

use function Games\Engine\Even;
use function cli\line;

function StartGame(string $name)
{
    line('Answer "yes" if the number is even, otherwise answer "no".');
    return Even($name);
}
