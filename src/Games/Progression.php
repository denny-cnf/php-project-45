<?php
namespace Games\Progression;
use function Games\Engine\Hello;
use function Games\Engine\Random;
use function Games\Engine\Win;
use function Games\Engine\Loss;
use function cli\line;
use function cli\prompt;

function Main() {
    Hello();
    global $name;

    line("What number is missing in the progression?");

    for ($i=0; $i<3; $i++) {
        $num1 = random();
        $num2 = random();
        $length = rand(5, 10);

        line("Question: $num1 $num2");
        $answer = "";
        $answer = prompt('Your answer', $answer);

        $result = gmp_gcd($num1, $num2);

        if ($result == $answer) {
            line("Correct!");
        } else {
            Loss();
        }
    }
    Win();
}
