<?php

/**
 * This file contains logic Brain-games Progression
 */

namespace Games\Progression;

use function cli\line;
use function cli\prompt;
use function Games\Engine\absoluteRandomNum;
use function Games\Engine\checkData;
use function Games\Engine\hello;
use function Games\Engine\win;

use const Games\Engine\ROUNDS;

function getProgression()
{
    $name = hello();
    line("What number is missing in the progression?");
    for ($i = 0; $i < ROUNDS; $i++) {
        $array = [];
        $allNums = 0;
        $length = rand(5, 10);
        $rand = rand(0, $length);
        $num1 = absoluteRandomNum();
        $num2 = absoluteRandomNum();
        $progression = ($num2 - $num1);
        for ($l = 0; $l <= $length; $l++) {
            $sum = $num1 + $progression;
            $allNums += $sum;
            $array[] = $allNums;
        }
        $result = $array[$rand];
        $replacement = array($rand => "..");
        $array = array_replace($array, $replacement);
        $question = implode(" ", $array);
        line("Question: $question");
        $getUserAnswer = prompt('Your answer', $getUserAnswer = "");
        checkData($name, $getUserAnswer, $result);
    }
    win($name);
}
