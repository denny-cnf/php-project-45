<?php

/**
 * Header Block.
 */

namespace BrainGames;

use function cli\line;
use function cli\prompt;

line('Welcome to the Brain Game');
$name = prompt('May I have your name?');
line("Hello, %s!", $name);