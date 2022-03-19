<?php

$correntistas_e_compras = [
  "Giovanni",
  12,
  "Maria",
  25,
  "Luis",
  "Luísa",
  "12"
];

echo "<pre>";
var_dump($correntistas_e_compras);

classArrayUtils::remover("12", $correntistas_e_compras);

echo "<pre>";
var_dump($correntistas_e_compras);
