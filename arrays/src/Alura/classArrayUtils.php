<?php

namespace Alura;

class classArrayUtils
{
  public static function remover($elmento, &$array)
  {
    $retornar_posicao = array_search($elmento, $array, true);

    if (is_int($retornar_posicao)) {
      unset($array[$retornar_posicao]);
    } else {
      echo "Não foi encontrato arrays";
    }
  }

  public static function correntistaMaiorValor($saldo, $correntistas)
  {

    $correntistaMaiorValor = [];

    foreach ($correntistas as $chave => $valor) {
      if ($saldo >= $valor) {
        $correntistaMaiorValor[] = $chave;
      }
    }
    return $correntistaMaiorValor;
  }
}
