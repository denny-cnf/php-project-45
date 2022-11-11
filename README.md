### Hexlet tests and linter status:
[![Actions Status](https://github.com/denny-cnf/php-project-45/workflows/hexlet-check/badge.svg)](https://github.com/denny-cnf/php-project-45/actions)

[![Maintainability](https://api.codeclimate.com/v1/badges/d0bc44722398bfd02d89/maintainability)](https://codeclimate.com/github/denny-cnf/php-project-45/maintainability)

# Why this?
This is a console collection of 5 games written in PHP using the php-cli-tools library.

All games are 3 rounds. If the user successfully answered all 3, then he won. If at least 1 question is answered incorrectly, the game stops.

## Requirements
* PHP 8.0+
* Composer
* Make

#### Library
1. [php-cli-tools](https://github.com/wp-cli/php-cli-tools)
2. [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer)



## Installation
    make install                Build and install project


## Commands

    make validate               Check & validate project
    make lint                   Checking the code for the PSR 12 standard with library PHP_CodeSniffer

    Running games:
    make brain-games            Start brain-games (simple test game, echo username)
    make brain-even             Start brain-even (Checking a number for parity) The essence of the game is as follows: the user is shown a random number. And he needs to answer yes if the number is even, or no if it is odd: 
    make brain-gcd              Start brain-gcd (The game finds the greatest common divisor of a number) The essence of the game is as follows: the user is shown two random numbers, for example, 25 50. The user must calculate and enter the greatest common divisor of these numbers.
    make brain-progression      Start brain-progression (Game Arithmetic progression) We show the player a series of numbers that form an arithmetic progression, replacing any of the numbers with two dots. The player must determine this number.
    make brain-prime            Start brain-prime (Game Is it a prime number?) The player needs to answer the question whether this number is prime or not.
    make brain-calc             Start brain-calc (Simple calculator) The essence of the game is as follows: the dependence shows a random mathematical expression, for example 35 + 16, which must be calculated and the correct answer obtained.


## Preview Games

### ASCIINEMA EVEN
https://asciinema.org/a/S2Y5Kk8KYKCZcWV0dQuny8u3l

### ASCIINEMA CALC
https://asciinema.org/a/4ykpK3DngDsXDsZREPUTD6yXn

### ASCIINEMA GCD
https://asciinema.org/a/FjwTrxaBXBzJzOoKADTh96KhV

### ASCIINEMA Progression
https://asciinema.org/a/HlnNk3P1RuhQBACyvxNmOHp4J

### ASCIINEMA Prime
https://asciinema.org/a/ZdcaOYQUt3DkFKhXKaX4FaqtM