<?php
/**
 * Created by PhpStorm.
 * User: nhat
 * Date: 12/20/17
 * Time: 8:09 PM
 */

class FizzBuzz
{
    static function read($number){
        if (FizzBuzz::isInvalidNumber($number)){
            return "Invalid number!";
        }
        if (FizzBuzz::isNotFizzBuzzNumber($number)){
            return $number;
        }
        if (FizzBuzz::isFizzBuzzNumber($number)){
            return 'FizzBuzz';
        }
        if (FizzBuzz::isFizzNumber($number)){
            return 'Fizz';
        }
        if (FizzBuzz::isBuzzNumber($number)){
            return 'Buzz';
        }
        return "";
    }

    static function isInvalidNumber($number)
    {
        return ($number < 1 || $number > 100);
    }

    static function isNotFizzBuzzNumber($number){
        return !($number % 3 == 0 || $number % 5 == 0);
    }
    static function isFizzBuzzNumber($number){
        return $number % 3 == 0 && $number % 5 == 0;
    }
    static function isFizzNumber($number){
        return $number % 3 == 0;
    }

    static function isBuzzNumber($number){
        return ($number % 5) == 0;
    }
}