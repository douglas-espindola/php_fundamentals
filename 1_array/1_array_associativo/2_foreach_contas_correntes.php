<?php

$contasCorrentes = [
  123456 => [
    'titular' => 'Douglas',
    'saldo'   => 1000
  ],
  789101 => [
    'titular' => 'Maria',
    'saldo'   => 2000
  ],
  123456 => $conta_3 = [
    'titular' => 'Marcos',
    'saldo'   => 4000
  ]
];

foreach ($contasCorrentes as $cpf => $conta) {
  // echo $conta['saldo'] . PHP_EOL;
  echo $cpf . PHP_EOL;
}
