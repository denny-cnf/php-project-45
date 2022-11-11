<?php

/**
 * This file contains logic Brain-games Even
 */

namespace Games\Even;

use function cli\line;
use function cli\prompt;
use function Games\Engine\absoluteRandomNum;
use function Games\Engine\win;
use function Games\Engine\checkData;
use function Games\Engine\hello;

use const Games\Engine\ROUNDS;

function even()
{
    $name = hello();
    line('Answer "yes" if the number is even, otherwise answer "no".');
    for ($i = 0; $i < ROUNDS; $i++) {
        $question = absoluteRandomNum();
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
