<?php

class classArrayUtils
{
  public static function remover($elmento, &$array)
  {
    $retornar_posicao = array_search($elmento, $array);

    unset($array[$retornar_posicao]);
  }
}
