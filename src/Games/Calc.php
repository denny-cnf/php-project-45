<?php
namespace Games\Calc;
use function Games\Engine\Hello;
use function Games\Engine\Random;
use function Games\Engine\Win;
use function Games\Engine\Loss;
use function cli\line;
use function cli\prompt;

function Main() {
    Hello();
    global $name;

    line("What is the result of the expression?");

    for ($i=0; $i<3; $i++) {
        $num1 = random();
        $num2 = random();
        $operator = array('+', '-', '*');
        $operRand = array_rand($operator, 1);
        $operValue = $operator[$operRand];

        line("Question: $num1 $operValue $num2");
        $answer = "";
        $answer = prompt('Your answer', $answer);
    
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
            Loss();
        }
    }
    Win();
}
