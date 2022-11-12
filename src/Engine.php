<?php

/**
 * Games Engine
 */

namespace Games\Engine;

const ROUNDS = 3;
use function cli\line;
use function cli\prompt;

function hello()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}

function loss(string $name, string $answer, mixed $result)
{
    line("'$answer' is wrong answer ;(. Correct answer was '$result'.");
    line("'Let's try again, %s!'", $name);
    return;
}

function correct()
{
    line("Correct!");
    return;
}

function win(string $name)
{
    line("Congratulations, %s!", $name);
    return;
}

function checkData(string $name, mixed $answer, mixed $result)
{
    if ($result == $answer) {
        correct();
    } else {
        loss($name, $answer, $result);
        exit();
    }
    return;
}

function getRandomSymbol(string $symbol, int $num1, int $num2)
{
    $result = "";
    switch ($symbol) {
        case '+':
            $result = $num1 + $num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
    }
    return $result;
}

function absoluteRandomNum()
{
    return abs(rand(1, 99));
}

function gmp(int $d1, int $d2)
{
    $array1 = [];
    $array2 = [];
    for ($i1 = $d1; $i1 >= 1; $i1--) {
        if (($d1 % $i1) == 0) {
            $array1[] = $i1;
        }
    }
    for ($i2 = $d2; $i2 >= 1; $i2--) {
        if (($d2 % $i2) == 0) {
            $array2[] = $i2;
        }
    }
    return max(array_intersect($array1, $array2));
}
