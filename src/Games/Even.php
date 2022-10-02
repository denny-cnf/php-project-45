<?php
namespace Games\Even;
use function cli\line;
use function cli\prompt;
use function Games\Engine\Hello;
use function Games\Engine\Random;
use function Games\Engine\Win;
use function Games\Engine\Loss;

function Main() {

Hello();

global $name;

line('Answer "yes" if the number is even, otherwise answer "no".');

    for ($i=0; $i<3; $i++) {
        $question = random();
        $answer = "";
        line('Question: '. $question);
        $answer = prompt('Your answer', $answer);

        // Проверка на четность
        if ($question % 2 === 0) {
            $true = "yes";
        } else {
            $true = "no";
        }

        // Проверка ответа юзера
        if ($true === "yes") {
            if ($answer === "yes") {
                line('Correct!');
            } else {
                Loss();
            }
        } elseif ($true === "no") {
            if ($answer === "no") {
                line('Correct!');
            } else {
                Loss();
            }
        }
    }
    Win();
}
