<?php

$saldos = [
  2500,
  3000,
  1000,
  3700,
  9000
];

foreach ($saldos as $saldo) {
  echo "<p>O saldo é $saldo </p>";
}

// Exibir o menor saldo
sort($saldos);

echo "<p>O menor Saldo é $saldos[0]</p>";
