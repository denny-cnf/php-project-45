<?php
namespace Games\Prime;
use function cli\line;
use function cli\prompt;
use function Games\Engine\Hello;
use function Games\Engine\Random;
use function Games\Engine\Correct;
use function Games\Engine\Win;
use function Games\Engine\Loss;

function Main() {

Hello();

global $name;
global $answer;
global $result;

line('Answer "yes" if given number is prime. Otherwise answer "no".');

    for ($i=0; $i<3; $i++) {
        $question = random();
        $answer = "";
        line('Question: '. $question);
        $answer = prompt('Your answer', $answer);

        // Проверка на четность
        for ($k = 2; $k < $question; $k++) {
            if ($question % $k === 0) {
                $result = "yes";
            } else {
                $result = "no";
            }
        }
    
        // Проверка ответа юзера
        if ($result === "yes") {
            if ($answer === "yes") {
                Correct();
            } else {
                Loss();
            }
        } elseif ($result === "no") {
            if ($answer === "no") {
                Correct();
            } else {
                Loss();
            }
        }

    }
    Win();
}
