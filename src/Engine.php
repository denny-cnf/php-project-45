<?php

/**
 * Games Engine
 */

namespace Games\Engine;

const ROUNDS = 3;
use function cli\line;
use function cli\prompt;

function Hello()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}

function Loss(string $name, string $answer, string $result)
{
    line("'$answer' is wrong answer ;(. Correct answer was '$result'.");
    line("'Let's try again, %s!'", $name);
    return exit();
}

function Correct()
{
    line("Correct!");
}

function Win(string $name)
{
    line("Congratulations, %s!", $name);
}

function AbsRandom()
{
    return abs(rand(1, 99));
}

function Gmp(int $d1, int $d2)
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

function Even(string $name)
{
    for ($i = 0; $i < ROUNDS; $i++) {
        $question = AbsRandom();
        $answer = "";
        line('Question: ' . $question);
        $answer = prompt('Your answer', $answer);
        if ($question % 2 === 0) {
            $result = "yes";
        } else {
            $result = "no";
        }
        if ($result === $answer) {
            Correct();
        } else {
            Loss($name, $answer, $result);
        }
    }
    Win($name);
    return true;
}

function Calc(string $name)
{
    line("What is the result of the expression?");
    for ($i = 0; $i < 3; $i++) {
        $num1 = AbsRandom();
        $num2 = AbsRandom();
        if ($num1 < $num2) {
            $tempNum1 = $num1;
            $tempNum2 = $num2;
            $num1 = $tempNum2;
            $num2 = $tempNum1;
        }
        $symbol = array('+', '-', '*');
        $randomSymbol = $symbol[array_rand($symbol, 1)];
        line("Question: $num1 $randomSymbol $num2");
        $answer = "";
        $answer = prompt('Your answer', $answer);
        switch ($randomSymbol) {
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
        if ($result == $answer) {
            Correct();
        } else {
            Loss($name, $answer, $result);
        }
    }
    Win($name);
    return true;
}

function Gcd(string $name)
{
    line("Find the greatest common divisor of given numbers.");
    for ($i = 0; $i < 3; $i++) {
        $num1 = AbsRandom();
        $num2 = AbsRandom();
        line("Question: $num1 $num2");
        $answer = "";
        $answer = prompt('Your answer', $answer);
        $result = Gmp($num1, $num2);
        if ($result == $answer) {
            Correct();
        } else {
            line("'$answer' is wrong answer ;(. Correct answer was '$result'.");
            line("'Let's try again, %s!'", $name);
            exit();
        }
    }
    Win($name);
    return true;
}

function Prime(string $name)
{
    for ($i = 0; $i < 3; $i++) {
        $question = AbsRandom();
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
            Correct();
        } else {
            line("'$answer' is wrong answer ;(. Correct answer was '$result'.");
            line("'Let's try again, %s!'", $name);
            exit();
        }
    }
    Win($name);
    return true;
}

function Progression(string $name)
{
    for ($i = 0; $i < 3; $i++) {
        $array = [];
        $allNums = 0;
        $length = rand(5, 10);
        $rand = rand(0, $length);
        $num1 = AbsRandom();
        $num2 = AbsRandom();
        $progression = ($num2 - $num1);
        for ($l = 0; $l <= $length; $l++) {
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
            line("'$answer' is wrong answer ;(. Correct answer was '$result'.");
            line("'Let's try again, %s!'", $name);
            exit();
        }
    }
    Win($name);
    return true;
}
