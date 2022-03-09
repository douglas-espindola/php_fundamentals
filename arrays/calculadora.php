<?php

class Calculadora
{
  public function calculaMedia($notas)
  {
    $quantidade_notas = sizeof($notas);
    if ($quantidade_notas > 0) {
      $media = ($notas[0] + $notas[1] + $notas[2] + $notas[3] + $notas[4]) / $quantidade_notas;

      return $media;
    } else {
      return null;
    }
  }
}
