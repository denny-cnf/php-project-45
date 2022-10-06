<?php

/**
 * Games Engine
 */

namespace Games\Engine;
use function cli\line;
use function cli\prompt;

$name = "";
$answer = "";
$result = "";

function Hello() {
    global $name;
    line('Welcome to the Brain Game');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}

function Loss() {
    global $name;
    global $answer;
    global $result;
    line("'$answer' is wrong answer ;(. Correct answer was '$result'.");
    line("'Let's try again, %s!'", $name);
    exit();
}

function Correct() {
    line("Correct!");
}

function Win() {
    global $name;
    line("Congratulations, %s!", $name);
}

function Random() {
    return abs(rand(1,99));
}
