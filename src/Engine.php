<?php

/**
 * Games Engine
 */

namespace Games\Engine;

use function cli\line;
use function cli\prompt;

function Hello()
{
    global $name;
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}

function Loss()
{
    global $name;
    global $answer;
    global $result;
    line("'$answer' is wrong answer ;(. Correct answer was '$result'.");
    line("'Let's try again, %s!'", $name);
    exit();
}

function Correct()
{
    line("Correct!");
}

function Win()
{
    global $name;
    line("Congratulations, %s!", $name);
}

function Random()
{
    return abs(rand(1, 99));
}

function Gmp($d1, $d2)
{
    $array1 = [];
    $array2 = [];
    for ($i1 = $d1; $i1 >= 1; $i1--) {
        if (($d1 % $i1) == 0) {
            array_push($array1, $i1);
        }
    }
    for ($i2 = $d2; $i2 >= 1; $i2--) {
        if (($d2 % $i2) == 0) {
            array_push($array2, $i2);
        }
    }
    $od = array_intersect($array1, $array2);
    $result = max($od);
    return $result;
}
