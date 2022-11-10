<?php

/**
 * This file contains logic Brain-games Even
 */

namespace Games\Even;

use function cli\line;
use function cli\prompt;
use function Games\Engine\absRandom;
use function Games\Engine\win;
use function Games\Engine\checkData;

use const Games\Engine\ROUNDS;

function even()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');
    for ($i = 0; $i < ROUNDS; $i++) {
        $question = absRandom();
        line('Question: ' . $question);
        $answer = prompt('Your answer', $answer = "");
        if ($question % 2 === 0) {
            $result = "yes";
        } else {
            $result = "no";
        }
        checkData($name, $answer, $result);
    }
    win($name);
}
