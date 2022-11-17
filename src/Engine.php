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

function win(string $name)
{
    line("Congratulations, %s!", $name);
    return;
}

function checkData(string $name, mixed $answer, mixed $result)
{
    if ($result == $answer) {
        line("Correct!");
    } else {
        line("'$answer' is wrong answer ;(. Correct answer was '$result'.");
        line("'Let's try again, %s!'", $name);
        exit();
    }
}

function absoluteRandomNum()
{
    return abs(rand(1, 99));
}
