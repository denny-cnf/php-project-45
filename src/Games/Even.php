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
use function Games\Engine\hello;
use function Games\Engine\correct;
use function Games\Engine\loss;

function even()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');
    for ($i = 0; $i < 3; $i++) {
        $question = absRandom();
        $answer = "";
        line('Question: ' . $question);
        $answer = prompt('Your answer', $answer);
        if ($question % 2 === 0) {
            $result = "yes";
        } else {
            $result = "no";
        }
        checkData($name, $question, $answer, $result);
    }
    win($name);
}
