<?php

/**
 * This file contains logic Brain-games Prime
 */

namespace Games\Prime;

use function cli\line;
use function cli\prompt;
use function Games\Engine\absRandom;
use function Games\Engine\checkData;
use function Games\Engine\hello;
use function Games\Engine\win;

use const Games\Engine\ROUNDS;

function getPrime()
{
    $name = hello();
    line('Answer "yes" if given number is prime. Otherwise answer "no".');
    for ($i = 0; $i < ROUNDS; $i++) {
        $question = absRandom();
        $result = "yes";
        line('Question: ' . $question);
        $answer = prompt('Your answer', $answer = "");
        for ($k = 2; $k < $question; $k++) {
            if ($question % $k === 0) {
                $result = "no";
            }
        }
        checkData($name, $answer, $result);
    }
    win($name);
}
