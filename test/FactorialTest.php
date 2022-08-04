<?php

namespace Iqbal\Factorial;

use PHPUnit\Framework\TestCase;

class FactorialTest extends TestCase
{
     public function testFactorial()
     {
          $factorial = new Factorial();

          $this->assertEquals(1, $factorial->factorial(0));
          $this->assertEquals(1, $factorial->factorial(1));
          $this->assertEquals(2, $factorial->factorial(2));
          $this->assertEquals(6, $factorial->factorial(3));
          $this->assertEquals(24, $factorial->factorial(4));
          $this->assertEquals(120, $factorial->factorial(5));
     }

     public function testFactorialRecursive()
     {
          $factorial = new Factorial();

          $this->assertEquals(1, $factorial->factorialRecursive(0));
          $this->assertEquals(1, $factorial->factorialRecursive(1));
          $this->assertEquals(2, $factorial->factorialRecursive(2));
          $this->assertEquals(6, $factorial->factorialRecursive(3));
          $this->assertEquals(24, $factorial->factorialRecursive(4));
          $this->assertEquals(120, $factorial->factorialRecursive(5));
     }

     public function testFactorialTailRecursive()
     {
          $factorial = new Factorial();

          $this->assertEquals(1, $factorial->factorialTailRecursive(1, 0));
          $this->assertEquals(1, $factorial->factorialTailRecursive(1, 1));
          $this->assertEquals(2, $factorial->factorialTailRecursive(1, 2));
          $this->assertEquals(6, $factorial->factorialTailRecursive(1, 3));
          $this->assertEquals(24, $factorial->factorialTailRecursive(1, 4));
          $this->assertEquals(120, $factorial->factorialTailRecursive(1, 5));
     }
}
