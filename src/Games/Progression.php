<?php

/**
 * This file contains logic Brain-games Progression
 */

namespace Games\Progression;

use function Games\Engine\Hello;
use function Games\Engine\Random;
use function Games\Engine\Correct;
use function Games\Engine\Win;
use function Games\Engine\Loss;
use function cli\line;
use function cli\prompt;

function Progression()
{
    Hello();
    global $name;
    global $answer;
    global $result;
    line("What number is missing in the progression?");
    for ($i = 0; $i < 3; $i++) {
        $array = [];
        $allNums = 0;
        $length = rand(5, 10);
        $rand = rand(0, $length);
        $num1 = rand(1, 99);
        $num2 = rand(1, 99);
        $progression = ($num2 - $num1);
        for ($l = 0; $l < $length; $l++) {
            $sum = $num1 + $progression;
            $allNums += $sum;
            array_push($array, $allNums);
        }
        $result = $array[$rand];
        $replacement = array($rand => "..");
        $array = array_replace($array, $replacement);
        $question = implode(" ", $array);
        line("Question: $question");
        $answer = "";
        $answer = prompt('Your answer', $answer);
        if ($result == $answer) {
            Correct();
        } else {
            Loss();
        }
    }
    Win();
}
