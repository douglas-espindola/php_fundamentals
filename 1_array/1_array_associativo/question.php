<?php
$n = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15];
function fizzBuzz($n)
{
  foreach ($n as $i) {
    if ($i % 3 == 0 && $i % 5 == 0) {
      echo "FizzBuzz" . PHP_EOL;
    } elseif ($i % 3 == 0 && $i % 5 != 0) {
      echo "Fizz" . PHP_EOL;
    } elseif ($i % 3 != 0 && $i % 5 == 0) {
      echo "Buzz" . PHP_EOL;
    } elseif ($i % 3 != 0 && $i % 5 != 0) {
      echo "$i" . PHP_EOL;
    }
  }

  return $i;
}

fizzBuzz($n);
