<?php

/**
 * Games Engine
 */

namespace Games\Engine;
use function cli\line;
use function cli\prompt;

$name = "";

function Hello() {
    global $name;
    line('Welcome to the Brain Game');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}

function Loss() {
    global $name;
    line("'no' is wrong answer ;(. Correct answer was 'yes'.");
    line("'Let's try again, %s!'", $name);
    exit();
}

function Win() {
    global $name;
    line("Congratulations, %s!", $name);
}

function Random() {
    return rand(1,99);
}