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

function absoluteRandomNum()
{
    return abs(rand(1, 99));
}
