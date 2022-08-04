<?php

namespace Iqbal\Factorial;

class Factorial
{
     function factorial(int $value): int
     {
          if ($value <= 0) {
               return 1;
          }
          //Temporary variable
          $result = 1;
          for ($i = $value; $i >= 1; $i--) {
               $result *= $i;
          }
          return $result;
     }

     public function factorialRecursive(int $value): int
     {
          if ($value <= 0) {
               return 1;
          } else {
               // 5 * factorialRecursive(5 - 1);
               // 5 * 4;
               // 5 * factorialRecursive(4 - 1);
               // 5 * 4 * 3;
               // 5 * factorialRecursive(3 - 1);  
               // 5 * 4 * 3 * 2;
               // 5 * factorialRecursive(2 - 1);  
               // 5 * 4 * 3 * 2 * 1;  
               // 5 * factorialRecursive(1 - 1);  
               // 5 * 4 * 3 * 2 * 1 * 1;  

               return $value * $this->factorialRecursive($value - 1);
          }
     }

     public function factorialTailRecursive(int $total, int $value): int
     {
          if ($value <= 0) {
               return $total;
          } else {
               // factorialTailRecursive(1 = 1 * 5, 5 - 1);
               // factorialTailRecursive(5 = 5 * 4, 4 - 1);
               // factorialTailRecursive(20 = 20 * 3, 3 - 1);
               // factorialTailRecursive(60 = 60 * 2, 2 - 1);
               // factorialTailRecursive(120 = 120 * 1, 1 - 1);
               // factorialTailRecursive(120 = 120, 0);
               return $this->factorialTailRecursive($total = $total * $value, $value - 1);
          }
     }
}
