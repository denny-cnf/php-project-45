<?php

/**
 * This file contains logic Brain-games Even
 */

namespace Games\Even;

use function cli\line;
use function cli\prompt;
use function Games\Engine\Hello;
use function Games\Engine\Random;
use function Games\Engine\Correct;
use function Games\Engine\Win;
use function Games\Engine\Loss;

function Even()
{
    Hello();
    global $name;
    global $answer;
    global $result;
    line('Answer "yes" if the number is even, otherwise answer "no".');
    for ($i = 0; $i < 3; $i++) {
        $question = random();
        $answer = "";
        line('Question: ' . $question);
        $answer = prompt('Your answer', $answer);
        if ($question % 2 === 0) {
            $result = "yes";
        } else {
            $result = "no";
        }
        if ($result === "yes") {
            if ($answer === "yes") {
                Correct();
            } else {
                Loss();
            }
        } elseif ($result === "no") {
            if ($answer === "no") {
                Correct();
            } else {
                Loss();
            }
        }
    }
    Win();
}
