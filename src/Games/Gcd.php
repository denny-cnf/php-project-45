<?php

/**
 * This file contains logic Brain-games Gcd
 */

namespace Games\Gcd;

use function cli\line;
use function cli\prompt;
use function Games\Engine\absoluteRandomNum;
use function Games\Engine\win;
use function Games\Engine\checkData;
use function Games\Engine\hello;

use const Games\Engine\ROUNDS;

function getGcd()
{
    $name = hello();
    line("Find the greatest common divisor of given numbers.");
    for ($i = 0; $i < ROUNDS; $i++) {
        $num1 = absoluteRandomNum();
        $num2 = absoluteRandomNum();
        line("Question: $num1 $num2");
        $getUserAnswer = prompt('Your answer', $getUserAnswer = "");
        $array1 = [];
        $array2 = [];
        for ($i1 = $num1; $i1 >= 1; $i1--) {
            if (($num1 % $i1) == 0) {
                $array1[] = $i1;
            }
        }
        for ($i2 = $num2; $i2 >= 1; $i2--) {
            if (($num2 % $i2) == 0) {
                $array2[] = $i2;
            }
        }
        $getResult = max(array_intersect($array1, $array2));
        checkData($name, $getUserAnswer, $getResult);
    }
    win($name);
}
