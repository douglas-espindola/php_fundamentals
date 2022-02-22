<!--  
  
-->
<?php

$conta_1 = [
  'titular' => 'Douglas',
  'saldo'   => 1000
];

$conta_2 = [
  'titular' => 'Maria',
  'saldo'   => 2000
];

$conta_3 = [
  'titular' => 'Marcos',
  'saldo'   => 4000
];

$contasCorrentes = [$conta_1, $conta_2, $conta_3];

for ($i = 0; $i < count($contasCorrentes); $i++) {

  echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}
