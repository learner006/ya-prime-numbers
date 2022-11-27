<?php
   declare(strict_types=1);
   namespace Yandex\Task;

   class Constants
   {
      const PRIME_NUMBER = true;
      const NOT_PRIME_NUMBER = false;
   };

   function is_prime(int $p_n): bool
   {
      // it is an even number or 1
      if ($p_n == 1 || $p_n % 2 == 0)
         return Constants::NOT_PRIME_NUMBER;

      // corner cases
      if ($p_n == 2 || $p_n == 3 || $p_n == 5)
         return Constants::PRIME_NUMBER;

      // at this point
      // the number is greater than 5 and it is odd number
      // loop through 'odd' divisors
      for ($divisor = 3; $divisor <= sqrt($p_n); $divisor += 2)
      {
         if ($p_n % $divisor == 0)
            return Constants::NOT_PRIME_NUMBER;
      }

      return Constants::PRIME_NUMBER;
   }

   $inputNumber = 65;

   $primeNumberCount = 0;

   // corner case
   if (2 < $inputNumber)
      $primeNumberCount = 1;

   // loop through odd numbers to reduce number of iterations
   for ($n = 3; $n < $inputNumber; $n+= 2)
   {
      $res = is_prime($n);
      $primeNumberCount += $res ? 1 : 0;

      $resAsString = $res ? 'prime number!' : '-';
      print "\$n = $n ($resAsString)\n";

      // print "\$n = $n, is_prime(\$n) = $res\n";
      // if (is_prime($n))
      //    ++$primeNumberCount;
   }

   print "===> \$primeNumberCount = $primeNumberCount\n";