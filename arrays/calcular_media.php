<?php
$notas = [9, 3, 10, 5, 10];

$calculadora = new Calculadora();
$media = $calculadora->calculaMedia($notas);

if ($media > 0) {
  echo "O cálculo da média é: $media";
} else {
  echo "Não foi possível calcular a média";
}
