<?php
$idadeList = [21, 23, 19, 56, 78, 10];

list($idadeDouglas, $idadeEduarda) = $idadeList;

$idadeList[] = 20;


foreach ($idadeList as $idade) {

  echo $idade . PHP_EOL;
}
