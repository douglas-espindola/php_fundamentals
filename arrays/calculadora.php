<?php

class Calculadora
{
  public function calculaMedia($notas)
  {
    $quantidade_notas = sizeof($notas);
    $media = ($notas[0] + $notas[1] + $notas[2] + $notas[3] + $notas[4]) / $quantidade_notas;
    echo "<P> A média é : $media </P>";
  }
}
