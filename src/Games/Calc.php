<?php
namespace Games\Calc;
use function cli\line;
use function cli\prompt;

function Main() {
    line("What is the result of the expression?");

    for ($i=0; $i<3; $i++) {
        $num1 = rand(1, 99);
        $num2 = rand(1, 99);
        $operator = array('+', '-', '*');
        $operRand = array_rand($operator, 1);
        $operValue = $operator[$operRand];

        line("Question: $num1 $operValue $num2");
        $answer = "";
        $answer = prompt('Your answer', $answer);
    
        // Делаем калькуляцию
        switch ($operValue) {
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
            line("Correct!");
        } else {
            line("'$answer' is wrong answer ;(. Correct answer was '$result'.");
            line("Let's try again, den!");
            exit();
        }

        line("Congratulations, den!");

    }
}
