<?php

/**
 * This file contains logic Brain-games Progression
 */

namespace Games\Progression;

use function cli\line;
use function cli\prompt;
use function Games\Engine\absoluteRandomNum;
use function Games\Engine\checkData;
use function Games\Engine\getProgressionNums;
use function Games\Engine\hello;
use function Games\Engine\win;

use const Games\Engine\ROUNDS;

function getProgression()
{
    $name = hello();
    line("What number is missing in the progression?");
    for ($i = 0; $i < ROUNDS; $i++) {
        $allNums = null;
        $arrayLength = rand(5, 10);
        $getRandomNum = rand(0, $arrayLength);
        $num1 = absoluteRandomNum();
        $num2 = absoluteRandomNum();
        $array = getProgressionNums($num1, $num2, $allNums, $arrayLength);
        $result = $array[$getRandomNum];
        $question = implode(" ", array_replace($array, array($getRandomNum => "..")));
        line("Question: $question");
        $getUserAnswer = prompt('Your answer', $getUserAnswer = "");
        checkData($name, $getUserAnswer, $result);
    }
    win($name);
}
