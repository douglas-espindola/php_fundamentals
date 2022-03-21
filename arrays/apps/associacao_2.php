<?php

$correntistas = [
  "Giovanni",
  "João",
  "Maria",
  "Luis",
  "Luisa",
  "Rafael"
];

$saldos = [
  2500,
  3000,
  4400,
  1000,
  8700,
  9000
];

$relacionados = array_combine($correntistas, $saldos);

foreach ($relacionados as $chave => $relacionado) {
  echo "<pre>";
  if (array_key_exists($chave, $relacionados)) {
    echo "O Saldo do(a) $chave é R$ $relacionado";
  } else {
    echo "Não encontrado";
  }
}
