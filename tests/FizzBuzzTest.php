<?php
/**
 * Created by PhpStorm.
 * User: nhat
 * Date: 12/20/17
 * Time: 8:09 PM
 */

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    function testInvalidNumber()
    {
        $number = 0;
        $expected = 'Invalid number!';
        $actual = FizzBuzz::read($number);
        $this->assertEquals($expected, $actual);
    }

    function testNotFizzBuzzNumber() {
        $number = 1;
        $expected = '1';
        $actual = FizzBuzz::read($number);
        $this->assertEquals($expected, $actual);
    }

    function testFizzNumber() {
        $number = 3;
        $expected = 'Fizz';
        $actual = FizzBuzz::read($number);
        $this->assertEquals($expected, $actual);
    }

    function testBuzzNumber() {
        $number = 5;
        $expected = 'Buzz';
        $actual = FizzBuzz::read($number);
        $this->assertEquals($expected, $actual);
    }

    function testFizzBuzzNumber() {
        $number = 15;
        $expected = 'FizzBuzz';
        $actual = FizzBuzz::read($number);
        $this->assertEquals($expected, $actual);
    }

}