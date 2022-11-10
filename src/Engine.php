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
}

function correct()
{
    line("Correct!");
}

function win(string $name)
{
    line("Congratulations, %s!", $name);
}

function checkData(string $name, mixed $result, mixed $answer)
{
    if ($result == $answer) {
        correct();
    } else {
        loss($name, $answer, $result);
        exit();
    }
}

function getrandomSymbol(string $symbol, int $a, int $b)
{
    switch ($symbol) {
        case '+':
            $result = $a + $b;
            break;
        case '-':
            $result = $a - $b;
            break;
        case '*':
            $result = $a * $b;
            break;
    }
    return $result;
}

function absRandom()
{
    return abs(rand(1, 99));
}

function gmp(int $d1, int $d2)
{
    $result = "";
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
    $result = max(array_intersect($array1, $array2));
    return $result;
}

function gcd(string $name)
{
    for ($i = 0; $i < ROUNDS; $i++) {
        $num1 = absRandom();
        $num2 = absRandom();
        line("Question: $num1 $num2");
        $answer = "";
        $answer = prompt('Your answer', $answer);
        $result = gmp($num1, $num2);
        if ($result == $answer) {
            correct();
        } else {
            loss($name, $answer, $result);
            break;
        }
    }
    win($name);
}

function prime(string $name)
{
    for ($i = 0; $i < ROUNDS; $i++) {
        $question = absRandom();
        $answer = "";
        $result = "yes";
        line('Question: ' . $question);
        $answer = prompt('Your answer', $answer);
        for ($k = 2; $k < $question; $k++) {
            if ($question % $k === 0) {
                $result = "no";
            }
        }

        if ($result === $answer) {
            correct();
        } else {
            loss($name, $answer, $result);
            break;
        }
    }
    win($name);
}

function progression(string $name)
{
    for ($i = 0; $i < ROUNDS; $i++) {
        $array = [];
        $allNums = 0;
        $length = rand(5, 10);
        $rand = rand(0, $length);
        $num1 = absRandom();
        $num2 = absRandom();
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
        $answer = "";
        $answer = prompt('Your answer', $answer);
        if ($result == $answer) {
            correct();
        } else {
            loss($name, $answer, $result);
            break;
        }
    }
    win($name);
}
