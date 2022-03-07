<?php
require_once 'calculadora.php';

$notas = [9, 3, 10, 5, 10];

$calculadora = new Calculadora();
$calculadora->calculaMedia($notas);
